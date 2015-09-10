<?php
require 'vendor/autoload.php';



$obj = new \SocialAuth\SocialAdapter(new \SocialAuth\Adapter\Facebook());


echo $obj->getLoginUrl();
echo $obj->getUser();