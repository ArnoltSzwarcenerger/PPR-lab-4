#!/usr/bin/php

<?php
	#===================================================================
	$port 	= 7777;
	$host 	= '127.0.0.1';
	$wsdl 	= 'http://' . $host . ':' . $port . '?wsdl';
	#-------------------------------------------------------------------
	$soap = new SoapClient( $wsdl );
	//print_r( $wsdl );
	$a = readline('wprowadz liczbe: ');
	
	$res  = $soap->getTime( $a );
	
	print_r( $res );
	#===================================================================
?>
