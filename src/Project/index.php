<?php
require_once __DIR__ . "/../Tutorial/LegacyCode/SomeClass.php";

$someClass = new SomeClass();
$status = $someClass->getCustomerStatus(1);
echo $status;