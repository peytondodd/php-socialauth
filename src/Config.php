<?php
/**
 * @author: Sohel Rana
 * @email: me.sohelrana@gmail.com
 * @uri: http://sohelrana.me
 * @tags: social login, php social login, login with facebook, login with twitter, login with google. login with
 * linkedin
 */

namespace SocialAuth;

define('DEVELOPMENT_MODE', true);
define('FACEBOOK_API_ID', '1493144440984604');
define('FACEBOOK_API_SECRET_KEY', '7a87489d6c89aee05dd84eeb37aedaa7');

define('TWITTER_CUSTOMER_KEY', 'Ulg59gtqd9eg2Dv5N3kpOLqml');
define('TWITTER_CUSTOMER_SECRET_KEY', 'LCJy5fbFOqL8kM5ZNYez3yG8SwG0U6SJf95L9TlY9MAAPncaef');
define('TWITTER_ACCESS_TOKEN', '315276438-qFuIQLhUfVyyfqLYstXMVmJIiMV4TVca1mWfY1KZ');
define('TWITTER_ACCESS_TOKEN_SECRET', 'pl7hLXoMIoNHanGFR31O3iwCZVw8NOPysHfEbI1JHSZFP');

class Config{

    public static $name = 'Config';

    public static $facebodokApiID = FACEBOOK_API_ID;

    public static $facebookApiSecretKey = FACEBOOK_API_SECRET_KEY;

    public static $twitterCustomerKey = TWITTER_CUSTOMER_KEY;
    public static $twitterCustomerSecretKey = TWITTER_CUSTOMER_SECRET_KEY;
    public static $twitterAccessToken = TWITTER_ACCESS_TOKEN;
    public static $twitterAccessTokenSecret = TWITTER_ACCESS_TOKEN_SECRET;

    public static function checkValidDomain($domain)
    {
        if(DEVELOPMENT_MODE == true && is_string($domain)){
            return true;
        }
        else{
            /*
             * @TODO Here need to check the given domain is valid or not. Return true if valid otherwise return false
             */
            return false;
        }
    }
}