<?php


namespace SocialAuth\Adapter;

use SocialAuth\Config;
use SocialAuth\Utility\ErrorHandler;

class Facebook {

    private $callBackUrl;

    private $facebook;

    private $loginHelper;

    private $accessCode;

    public function __construct($callbackUrl)
    {
        $this->callBackUrl = $callbackUrl;
        $this->facebook = new \Facebook\Facebook([
            'app_id' => Config::$facebookApiID,
            'app_secret' => Config::$facebookApiSecretKey,
            'default_graph_version' => 'v2.2',
        ]);

        $this->loginHelper = $this->facebook->getRedirectLoginHelper();
        $this->accessCode = $this->loginHelper->getAccessToken();
    }

    /**
     * @return string
     */
    public function loginUrl() {

        if(!$this->callBackUrl)
        {
            return ErrorHandler::error('empty_domain');
        }

        if(!Config::checkValidDomain($this->callBackUrl))
        {
            return ErrorHandler::error('invalid_domain');
        }

        $loginUrl = $this->loginHelper->getLoginUrl($this->callBackUrl);

        if($loginUrl)
        {
            return  $loginUrl;
        }
        return ErrorHandler::error();
    }

    public function checkAuth() {
        if($this->accessCode)
        {
            return true;
        }
        return false;
    }

    public function accessCode() {
        if($this->checkAuth())
        {
            return $this->accessCode->getValue();
        }
        return ErrorHandler::error('oauth');
    }

    public function userProfile() {
        if($this->checkAuth())
        {
            try {
                $response = $this->facebook->get('/me?fields=id, name', $this->accessCode);
                $user = $response->getGraphUser();
                return $user;
            }
            catch(\Facebook\Exceptions\FacebookResponseException $e) {
                $msg = 'Graph returned an error: ' . $e->getMessage();
            }
            catch(\Facebook\Exceptions\FacebookSDKException $e) {
                $msg = 'Facebook SDK returned an error: ' . $e->getMessage();
            }
        }
        return ErrorHandler::error('api_error', $msg);
    }

    public function logout() {
        return 'this function will return the fb logout url';
    }
}