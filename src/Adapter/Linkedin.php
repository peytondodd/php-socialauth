<?php


namespace SocialAuth\Adapter;

class Linkedin {

    public function __construct() {

    }

    public function loginUrl() {
        return 'this function will return the linkedin login url';
    }

    public function user() {
        return 'this function will return the linkedin user profile';
    }

    public function logout() {
        return 'this function will return the linkedin logout url';
    }

}