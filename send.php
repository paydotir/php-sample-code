<?php

include_once("functions.php");
$api = 'YOUR-API-KEY';
$amount = "Amount in IRRial";
$mobile = "MobileNumber (optional)";
$factorNumber = "FactorNumber (optional)";
$description = "Description (optional)";
$redirect = 'http://YOUR-CALLBACK-URL';
$result = send($api, $amount, $redirect, $mobile, $factorNumber, $description);
$result = json_decode($result);
if($result->status) {
	$go = "https://pay.ir/pg/$result->token";
	header("Location: $go");
} else {
	echo $result->errorMessage;
}