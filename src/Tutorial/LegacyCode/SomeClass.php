<?php
require 'thirdpartyapi.php';
require 'logger.php';
require 'db.php';

/**
 * Class SomeClass
 * @author flucht
 * @since 21.04.2014
 */
class SomeClass
{
    private $api;
    private $logger;

    public function __construct()
    {
        $this->api = new ThirdPartyApi();
        $this->logger = new Logger();
    }

    public function getCustomerStatus($customerId)
    {
        $db = new DatabaseLayer();

        $status = $this->api->getCustomerStatus($customerId);
        $db->saveCustomerStatus($customerId, $status);
        $this->logger->log("Customer Status updated");

        return $status;
    }
}