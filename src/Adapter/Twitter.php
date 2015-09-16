<?php

namespace SocialAuth\Adapter;

use Abraham\TwitterOAuth\TwitterOAuth;
use SocialAuth\Config;
use SocialAuth\Utility\ErrorHandler;

class Twitter
{

    private $callBackUrl;

    private $twitter;

    /**
     * @param $callbackUrl
     *
     * Construct function will taken callback url as argument and create twitter object for that given url.
     */
    public function __construct($callbackUrl)
    {
        $this->callBackUrl = $callbackUrl;
        $this->twitter = new TwitterOAuth(Config::$twitterCustomerKey, Config::$twitterCustomerSecretKey, Config::$twitterAccessToken, Config::$twitterAccessTokenSecret);
    }

    public function checkAuth()
    {
        $verified = $this->twitter->get("account/verify_credentials");
        if($verified)
        {
            return true;
        }
        return false;
    }
}