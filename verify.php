<?php

include_once("functions.php");
$api = 'YOUR-API';
$transId = $_POST['transId'];
$result = verify($api,$transId);
$result = json_decode($result);
print_r($result);