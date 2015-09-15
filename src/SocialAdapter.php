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

    public function getLoginUrl() {

        return $this->facebook->loginUrl();
    }

    public function isAuthenticated() {

        return $this->facebook->checkAuth();
    }

    public function getAccessCode() {

        return $this->facebook->accessCode();
    }

    public function getUserProfile()
    {
        return $this->facebook->userProfile();
    }

    public function getLogoutUrl()
    {
        return $this->facebook->logout();
    }
}