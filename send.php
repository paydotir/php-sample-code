<?php

include_once("functions.php");
$api = 'YOUR-API';
$amount = 'Amount';
$redirect = 'Callback';
$factorNumber = 123;
$mobile = 'Mobile-Number';
$description = 'Description';
$result = send($api,$amount,$redirect,$factorNumber,$mobile,$description);
$result = json_decode($result);
if($result->status) {
	$go = "https://pay.ir/payment/gateway/$result->transId";
	header("Location: $go");
} else {
	echo $result->errorMessage;
}