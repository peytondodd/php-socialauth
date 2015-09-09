<?php


namespace SocialAuth\Adapter;

class Facebook {

    public function __construct() {

    }

    public function login() {
        return 'this function will return the fb login url';
    }

    public function user() {
        return 'this function will return the fb user profile';
    }

    public function logout() {
        return 'this function will return the fb logout url';
    }
}