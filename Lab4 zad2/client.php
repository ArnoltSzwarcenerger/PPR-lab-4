#!/usr/bin/php

<?php
	#===================================================================
	$port 	= 7777;
	$host 	= '127.0.0.1';
	$wsdl 	= 'http://' . $host . ':' . $port . '?wsdl';
	#-------------------------------------------------------------------
	$soap = new SoapClient( $wsdl, array( 'proxy_host' => "127.0.0.1", 'proxy_port' => 7777) );
	//$res  = $soap->getTime( 'Some data...' );
	$a = readline('wprowadz liczbe: ');
	//print_r( $res );
	print_r($soap->getTime($a));
	#===================================================================
?>
