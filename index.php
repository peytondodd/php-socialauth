<?php
require 'vendor/autoload.php';

$facebook = new \SocialAuth\Facebook();
$facebookA = new \SocialAuth\FacebookAdapter(new \SocialAuth\Facebook());

echo $facebookA->getLoginUrl();
echo $facebookA->getUser();
echo $facebookA->getLoginUrl();