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