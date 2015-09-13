<?php


namespace SocialAuth\Adapter;

use SocialAuth\Config;
use SocialAuth\Utility\ErrorHandler;

class Facebook {

    public $callBackUrl;

    public $facebook;

    public function __construct($callbackUrl)
    {
        $this->callBackUrl = $callbackUrl;
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

        $this->facebook = new \Facebook\Facebook([
            'app_id' => Config::$facebookApiID,
            'app_secret' => Config::$facebookApiSecretKey,
            'default_graph_version' => 'v2.2',
        ]);

        $helper = $this->facebook->getRedirectLoginHelper();
        $loginUrl = $helper->getLoginUrl($this->callBackUrl);

        if($loginUrl)
        {
            return  $loginUrl;
        }
        return false;
    }

    public function userProfile() {
        return $this->facebook;
    }

    public function logout() {
        return 'this function will return the fb logout url';
    }
}