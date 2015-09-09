<?php
require 'vendor/autoload.php';

$facebook = new \SocialAuth\Adapter\Twitter();

$a = new \SocialAuth\SocialAdapter($facebook);


echo $a->getLoginUrl();