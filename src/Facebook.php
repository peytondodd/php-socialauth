<?php
/**
 * @author: Sohel Rana
 * @email: me.sohelrana@gmail.com
 * @uri: http://sohelrana.me
 * @tags: social login, php social login, login with facebook, login with twitter, login with google. login with
 * linkedin
 */

namespace SocialAuth;

require 'Config.php';

class Facebook {

    public function __construct() {

    }

    public function login() {
        return 'this function will return the login url';
    }

    public function user() {
        return 'this function will return the user profile';
    }

    public function logout() {
        return 'this function will return the logout';
    }
}

class FacebookAdapter implements SocialAuthInterface {

    private $facebook;

    public function __construct(Facebook $facebook) {
        $this->facebook = $facebook;
    }

    public function getLoginUrl() {
        return $this->facebook->login();
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