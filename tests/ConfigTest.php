<?php
require '../vendor/autoload.php';

class ConfigTest extends PHPUnit_Framework_TestCase
{

    public $config;

    public function setUp()
    {
        $this->config = new \SocialAuth\Config();
    }

    public function testClassName()
    {
        if($this->config)
        {
            $this->assertTrue(true);
        }else{
            $this->assertTrue(false);
        }
    }

    public function testNamespaceDeclaration()
    {
        $this->assertInstanceOf('\SocialAuth\Config', $this->config);
    }

    public function testNameStaticProperty()
    {
        $this->assertClassHasStaticAttribute('name', '\SocialAuth\Config');
    }

    public function testFacebookApiIDStaticProperty()
    {
        $this->assertClassHasStaticAttribute('name', '\SocialAuth\Config');
    }

    public function testFacebookApiSecretKeyStaticProperty()
    {
        $this->assertClassHasStaticAttribute('facebookApiSecretKey', '\SocialAuth\Config');
    }

    public function testTwitterCustomerKeyStaticProperty()
    {
        $this->assertClassHasStaticAttribute('twitterCustomerKey', '\SocialAuth\Config');
    }


    public function testTwitterCustomerSecretKeyStaticProperty()
    {
        $this->assertClassHasStaticAttribute('twitterCustomerSecretKey', '\SocialAuth\Config');
    }


    public function testTwitterAccessTokenStaticProperty()
    {
        $this->assertClassHasStaticAttribute('twitterAccessToken', '\SocialAuth\Config');
    }


    public function testTwitterAccessTokenSecretStaticProperty()
    {
        $this->assertClassHasStaticAttribute('twitterAccessTokenSecret', '\SocialAuth\Config');
    }

    public function testCheckValidDomainReturnTrueWhenValidDomain()
    {
        $response = $this->config->checkValidDomain('http://google.com');
        if($response == true)
        {
            $this->assertTrue(true);
        }
        else{
            $this->assertTrue(false);
        }
    }

    public function testCheckValidDomainReturnFalseWhenInvalidDomain()
    {
        $response = $this->config->checkValidDomain(1);
        if($response == false)
        {
            $this->assertTrue(true);
        }
        else{
            $this->assertTrue(false);
        }
    }

    public function tearDown()
    {
        unset($this->config);
    }
}

?>