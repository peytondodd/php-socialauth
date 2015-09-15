<?php
/**
 * @author: Sohel Rana
 * @email: me.sohelrana@gmail.com
 * @uri: http://sohelrana.me
 * @tags: social login, php social login, login with adapter, login with twitter, login with google. login with
 * linkedin
 */

namespace SocialAuth;

class SocialAdapter implements SocialAuthInterface {

    private $adapter;

    public function __construct($adapter) {
        $this->adapter = $adapter;
    }

    public function getLoginUrl() {

        return $this->adapter->loginUrl();
    }

    public function isAuthenticated() {

        return $this->adapter->checkAuth();
    }

    public function getAccessCode() {

        return $this->adapter->accessCode();
    }

    public function getUserProfile()
    {
        return $this->adapter->userProfile();
    }

    public function getLogoutUrl()
    {
        return $this->adapter->logout();
    }
}