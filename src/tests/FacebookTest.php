<?php
session_start();
require '../../vendor/autoload.php';

class FacebookTest extends PHPUnit_Framework_TestCase
{

    private $facebook;

    public function setUp()
    {
        $this->facebook = new \SocialAuth\Adapter\Facebook('http://localhost/php-socialauth/');
    }

    public function isSessionEnable()
    {
        unset($this->facebook);
    }

    public function testNamespaceDeclaration()
    {
        $this->assertInstanceOf('\SocialAuth\Adapter\Facebook', $this->facebook);
    }

    public function tearDown()
    {
        unset($this->facebook);
    }
}

?>