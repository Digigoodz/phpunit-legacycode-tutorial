<?php
require_once __DIR__ . "/../Tutorial/LegacyCode/SomeClass.php";

$db = new DatabaseLayer();
$logger = new Logger();
$api = new ThirdPartyApi();

$someClass = new SomeClass($db, $logger, $api);
$status = $someClass->getCustomerStatus(1);
echo $status;