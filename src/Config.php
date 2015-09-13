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

define('FACEBOOK_API_ID', '1645244829055897');

define('FACEBOOK_API_SECRET_KEY', '7d0ec4407bb39dbb21167ea5269af7f8');

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