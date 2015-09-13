<?php
session_start();
require 'vendor/autoload.php';
$facebook = new \SocialAuth\SocialAdapter(new \SocialAuth\Adapter\Facebook('http://localhost/php-socialauth'));
?>

<a href="<?php echo $facebook->getLoginUrl(); ?>">Login with facebook</a>
