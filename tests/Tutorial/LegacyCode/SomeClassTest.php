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

    public function testGetCustomerStatusReturnsActive()
    {
        $db = \Mockery::mock('DatabaseLayer');
        $db->shouldReceive('saveCustomerStatus')
            ->once()
            ->with(1, "active");

        $logger = \Mockery::mock('Logger');
        $logger->shouldReceive('log')
            ->with("Customer Status updated");

        $api = \Mockery::mock('ThirdPartyApi');
        $api->shouldReceive('getCustomerStatus')
            ->once()
            ->with(1)
            ->andReturn("active");


        $someClass = new \SomeClass($db, $logger, $api);
        $status = $someClass->getCustomerStatus(1);
        $this->assertEquals("active", $status);
    }
}