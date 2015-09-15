<?php


namespace SocialAuth\Adapter;

use SocialAuth\Config;
use SocialAuth\Utility\ErrorHandler;

class Facebook
{

    private $callBackUrl;

    private $facebook;

    private $loginHelper;

    private $accessCode = null;

    private $error;

    public function __construct($callbackUrl)
    {
        $this->callBackUrl = $callbackUrl;
        $this->facebook = new \Facebook\Facebook(
            [
                'app_id' => Config::$facebookApiID,
                'app_secret' => Config::$facebookApiSecretKey,
                'default_graph_version' => 'v2.2',
            ]
        );
        $this->writeAccessCode();
    }

    private function writeAccessCode()
    {
        $this->loginHelper = $this->facebook->getRedirectLoginHelper();
        try {
            $this->accessCode = $this->loginHelper->getAccessToken();
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            $this->error = 'Graph returned an error: ' . $e->getMessage();;
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            $this->error = 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }

    /**
     * @return string
     */
    public function loginUrl()
    {

        if (!$this->callBackUrl) {
            return ErrorHandler::error('empty_domain');
        }

        if (!Config::checkValidDomain($this->callBackUrl)) {
            return ErrorHandler::error('invalid_domain');
        }

        $loginUrl = $this->loginHelper->getLoginUrl($this->callBackUrl);

        if ($loginUrl) {
            return $loginUrl;
        }
        return ErrorHandler::error();
    }

    public function checkAuth()
    {
        if ($this->accessCode) {
            return 'auth';
        }
        return ErrorHandler::error('api_error', $this->error);
    }

    public function accessCode()
    {
        if ($this->accessCode) {
            return $this->accessCode->getValue();
        }
        return ErrorHandler::error('api_error', $this->error);
    }

    public function userProfile()
    {
        if ($this->accessCode) {
            try {
                $response = $this->facebook->get('/me?fields=id, name', $this->accessCode);
                $user = $response->getGraphUser();
                return $user;
            } catch (\Facebook\Exceptions\FacebookResponseException $e) {
                $this->error = 'Graph returned an error: ' . $e->getMessage();
            } catch (\Facebook\Exceptions\FacebookSDKException $e) {
                $this->error = 'Facebook SDK returned an error: ' . $e->getMessage();
            }
        }
        return ErrorHandler::error('api_error', $this->error);
    }

    public function logout()
    {
        if ($this->accessCode) {
            return $this->loginHelper->getLogoutUrl($this->accessCode);
        }
        return ErrorHandler::error('api_error', $this->error);
    }
}