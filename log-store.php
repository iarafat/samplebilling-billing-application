<?php
include_once "src/SampleBilling.php";
use App\SampleBilling\SampleBilling;

$obj = new SampleBilling();
$obj->prepare($_POST);
$obj->login();