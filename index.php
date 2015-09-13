<?php
session_start();
require 'vendor/autoload.php';
$facebook = new \SocialAuth\SocialAdapter(new \SocialAuth\Adapter\Facebook('http://localhost/php-socialauth/'));

var_dump($facebook->getLoginUrl());

?>

<a href="<?php echo $facebook->getLoginUrl('http://localhost/php-socialauth/'); ?>">Login with facebook</a>
