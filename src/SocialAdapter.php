<?php
/**
 * @author: Sohel Rana
 * @email: me.sohelrana@gmail.com
 * @uri: http://sohelrana.me
 * @tags: social login, php social login, login with facebook, login with twitter, login with google. login with
 * linkedin
 */

namespace SocialAuth;

class SocialAdapter implements SocialAuthInterface {

    private $facebook;

    public function __construct($adapter) {
        $this->facebook = $adapter;
    }

    public function getLoginUrl($callbackUrl) {

        if(!$callbackUrl)
        {
            return Config::setErrorMessage('empty_domain');
        }
        elseif(Config::checkValidDomain($callbackUrl)){
            $loginUrl = $this->facebook->loginUrl($callbackUrl);
            if($loginUrl)
            {
                return $loginUrl;
            }
            return Config::setErrorMessage();
        }
        else{
            return Config::setErrorMessage('invalid_domain');
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