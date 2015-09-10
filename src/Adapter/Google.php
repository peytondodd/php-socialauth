<?php


namespace SocialAuth\Adapter;

class Google {

    public function __construct() {

    }

    public function loginUrl() {
        return 'this function will return the google login url';
    }

    public function user() {
        return 'this function will return the google user profile';
    }

    public function logout() {
        return 'this function will return the google logout url';
    }
}