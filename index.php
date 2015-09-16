<?php
session_start();
require 'vendor/autoload.php';
$facebook = new \SocialAuth\SocialAdapter(new \SocialAuth\Adapter\Twitter('http://localhost/php-socialauth/'));
var_dump($facebook->isAuthenticated());
var_dump($facebook->getLoginUrl());
?>