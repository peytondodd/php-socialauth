<?php


namespace SocialAuth\Adapter;

use SocialAuth\Config;

class Facebook {

    public function __construct() {

    }

    public function login() {
        return Config::$facebookApiID;
    }

    public function user() {
        return Config::$facebookApiSecretKey;
    }

    public function logout() {
        return 'this function will return the fb logout url';
    }
}