<?php
/**
 * the sample code of cacelling refund via deveoper kit
 *@author Jan
 *@email  popmyjoshion@gmail.com
 */
require_once "Directpaykit.class.php";
$oop = new \Directpaykit(3, // your merchant_id
	1, //your site_id
	"xxxxxx" //your api_key
);
$arr = array(
	"oid" => "111", //transaction id of the platform
);
$result = $oop->cancelRefund($arr["oid"]);
$arr_result = json_decode($result, true);
var_dump($arr_result);