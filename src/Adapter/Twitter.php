<?php

namespace SocialAuth\Adapter;

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

        $settings = array(
            'oauth_access_token' => Config::$twitterAccessToken,
            'oauth_access_token_secret' => Config::$twitterAccessTokenSecret,
            'consumer_key' => Config::$twitterCustomerKey,
            'consumer_secret' => Config::$twitterCustomerSecretKey
        );

        $this->twitter = new \TwitterAPIExchange($settings);
    }

    public function buildApiUrl($urlPath)
    {
        return 'https://api.twitter.com/'.$urlPath.'.json';
    }

    public function checkAuth()
    {
        $response = $this->twitter->setGetfield()
            ->buildOauth($this->buildApiUrl('account/verify_credentials'), 'GET')
            ->performRequest();

        $url = $this->buildApiUrl('oauth/request_token');
        $requestMethod = 'POST';

        var_dump($url);

        $postfields = array(
            'OAuth oauth_nonce' => time(),
            'oauth_callback' => $this->callBackUrl,
            'oauth_signature_method' => "HMAC-SHA1",
            'oauth_timestamp' => strtotime(time()),
            'oauth_consumer_key' => Config::$twitterCustomerKey,
            /*'oauth_signature' => "Pc%2BMLdv028fxCErFyi8KXFM%2BddU%3D",*/
            'oauth_signature' => "1.0"
        );

        var_dump($postfields);

        $response = $this->twitter->buildOauth($url, $requestMethod)
            ->setPostfields($postfields)
            ->performRequest();

        var_dump($response);
    }
}