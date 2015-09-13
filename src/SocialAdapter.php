<?php
/**
 * @author: Sohel Rana
 * @email: me.sohelrana@gmail.com
 * @uri: http://sohelrana.me
 * @tags: social login, php social login, login with facebook, login with twitter, login with google. login with
 * linkedin
 */

namespace SocialAuth;

use SocialAuth\Utility\ErrorHandler;

class SocialAdapter implements SocialAuthInterface {

    private $facebook;

    public function __construct($adapter) {
        $this->facebook = $adapter;
    }

    public function getLoginUrl($callbackUrl) {

        if(!$callbackUrl)
        {
            return ErrorHandler::error('empty_domain');
        }
        elseif(Config::checkValidDomain($callbackUrl)){
            $loginUrl = $this->facebook->loginUrl($callbackUrl);
            if($loginUrl)
            {
                return $loginUrl;
            }
            return  ErrorHandler::error();
        }
        else{
            return ErrorHandler::error('invalid_domain');
        }

    }

    public function getUser()
    {
        return $this->facebook->user();
    }

    public function getLogoutUrl()
    {
        return $this->facebook->logout();
    }
}