<?php
namespace Tutorial\LegacyCodeTest;

require_once __DIR__ . '/../../../src/Tutorial/LegacyCode/SomeClass.php';

class SomeClassTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorInitialization()
    {
        $db = \Mockery::mock('DatabaseLayer');
        $logger = \Mockery::mock('Logger');
        $api = \Mockery::mock('ThirdPartyApi');

        $someClass = new \SomeClass($db, $logger, $api);
        $this->assertEquals($db, $someClass->getDb());
        $this->assertEquals($logger, $someClass->getLogger());
        $this->assertEquals($api, $someClass->getApi());
    }
}