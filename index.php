<?php
session_start();
require 'vendor/autoload.php';
$obj = new \SocialAuth\SocialAdapter(new \SocialAuth\Adapter\Facebook());
var_dump($obj->getLoginUrl('222'));
