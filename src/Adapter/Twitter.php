<?php


namespace SocialAuth\Adapter;

class Twitter {

    public function __construct() {

    }

    public function loginUrl() {
        return 'this function will return the twitter login url';
    }

    public function user() {
        return 'this function will return the twitter user profile';
    }

    public function logout() {
        return 'this function will return the  twitter logout url';
    }
}