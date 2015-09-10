<?php


namespace SocialAuth\Adapter;

use SocialAuth\Config;

class Facebook {

    public function __construct() {

    }

    /**
     * @param $callbackUrl
     * @return string
     */
    public function loginUrl($callbackUrl) {

        $facebook = new \Facebook\Facebook([
            'app_id' => Config::$facebookApiID,
            'app_secret' => Config::$facebookApiSecretKey,
            'default_graph_version' => 'v2.2',
        ]);

        $helper = $facebook->getRedirectLoginHelper();
        $loginUrl = $helper->getLoginUrl($callbackUrl);

        if($loginUrl)
        {
            return  $loginUrl;
        }
        return false;
    }

    public function user() {
        return Config::$facebookApiSecretKey;
    }

    public function logout() {
        return 'this function will return the fb logout url';
    }
}