<?php
	#===================================================================
	function getTime( $data  ) {
		
		#- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
		$stderr = fopen('php://stderr', 'w');
		fwrite( $stderr, "Proces I przeslal: $data\n" );
		$client = new SoapClient( "http://127.0.0.2:7777?wsdl" );
		$client->getTime(dechex($data));
	}
	#-------------------------------------------------------------------
	
	$server = new SoapServer("example.wsdl");
	$server->addFunction("getTime");
	$server->handle();
	#===================================================================

?>

