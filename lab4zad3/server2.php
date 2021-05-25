<?php
	#===================================================================
	
	function getTime( $data ) {
		$stderr = fopen('php://stderr', 'w');
		fwrite( $stderr, "Client: $data\n" );
		return $data;
	}
	#-------------------------------------------------------------------
	# wylaczanie pamieci cache jest sensowne jedynie przy tworzeniu serwisu
	//ini_set("soap.wsdl_cache_enabled", "0");
	$glob = 1;
	$server = new SoapServer("example2.wsdl");
	$server->addFunction("getTime");
	$server->handle();
	
	#===================================================================

?>

