<?php
	// MySQL Database: Change this information
	$DB_USER = 'demo';
	$DB_PASSWORD = '<mysql_password>';
	$DB_DATABASE= 'demo';
	$DB_HOST = 'localhost';

	// Only change if required, useful to install on a shared DB
	$DB_TABLE_PREFIX = 'ttc_';
	
	// My site: The API will call it. It needs to be accessible by it (don't use localhost).
	$MY_SITE = "http://example.com/receive_payment_php_demo/";
	
	// My TTC address: Payments will be forwarded here
	$MY_ADDRESS = 'TZDQb8LNaJq1gBxxiKXYFbDNHpRM9QFAx6'; // Change this!
	
	// A unique string, without spaces or special characters
	$SECRET_KEY = "xqtgO1CkH75oYu42Xpw3"; // Optional. Remove or change!
	
	// Demo Products
	// Name and price in TTC
	$PRODUCTS = array( "Chocolate"=>1250.30,
						"Water"=>750.15,
						"Bread"=>2425.25 );

	// API root
	$API = "https://ttcapi.com/";
	// Block explorer
	$EXPLORER = "http://blockexperts.com/ttc/";
?>