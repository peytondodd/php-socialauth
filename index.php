<?php
require 'vendor/autoload.php';



$obj = new \SocialAuth\SocialAdapter(new \SocialAuth\Adapter\Linkedin());


echo $obj->getLoginUrl();
echo $obj->getUser();