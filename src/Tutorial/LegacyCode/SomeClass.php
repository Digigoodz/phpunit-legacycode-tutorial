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
    private $db;

    public function __construct()
    {
        $this->api = new ThirdPartyApi();
        $this->logger = new Logger();
        $this->db = new DatabaseLayer();
    }

    public function getCustomerStatus($customerId)
    {
        $status = $this->api->getCustomerStatus($customerId);
        $this->db->saveCustomerStatus($customerId, $status);
        $this->logger->log("Customer Status updated");

        return $status;
    }
}