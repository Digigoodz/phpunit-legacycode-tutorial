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

    public function __construct(
        DatabaseLayer $db,
        Logger $logger,
        ThirdPartyApi $api
    ) {
        $this->api = $api;
        $this->logger = $logger;
        $this->db = $db;
    }

    public function getCustomerStatus($customerId)
    {
        $status = $this->api->getCustomerStatus($customerId);
        $this->db->saveCustomerStatus($customerId, $status);
        $this->logger->log("Customer Status updated");

        return $status;
    }

    public function getDb()
    {
        return $this->db;
    }

    public function getApi()
    {
        return $this->api;
    }

    public function getLogger()
    {
        return $this->logger;
    }
}