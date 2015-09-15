<?php
session_start();
require 'vendor/autoload.php';
$facebook = new \SocialAuth\SocialAdapter(new \SocialAuth\Adapter\Facebook('http://localhost/php-socialauth/'));


if($facebook->isAuthenticated() == 'auth')
{
    var_dump($facebook->getAccessCode());
    var_dump($facebook->getUserProfile());
    var_dump($facebook->getLogoutUrl());
}
else{
    echo '<a href="'.$facebook->getLoginUrl().'">Login with facebook</a>';
}
?>