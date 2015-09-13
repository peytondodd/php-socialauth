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

define('FACEBOOK_API_ID', '1648440608736319');

define('FACEBOOK_API_SECRET_KEY', 'f8f3bc27aa166e06b1c74c935ac51d19');

class Config{

    public static $name = 'Config';

    public static $facebookApiID = FACEBOOK_API_ID;

    public static $facebookApiSecretKey = FACEBOOK_API_SECRET_KEY;

    public static function checkValidDomain($domain)
    {
        if(DEVELOPMENT_MODE == true){
            return true;
        }
        else{
            /*
             * @TODO Here need to check the given domain is valid or not. Return true if valid otherwise return false
             */
            return true;
        }
    }
}