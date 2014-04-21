<?php

/**
 * Class DatabaseLayer
 * @author flucht
 * @since 21.04.2014
 */
class DatabaseLayer
{
    /**
     * @param $customerId
     * @param $status
     * @return bool
     */
    public function saveCustomerStatus($customerId, $status)
    {
        error_log("Status saved for Customer: {$customerId} with status: {$status}");
        return true;
    }
}
