<?php
	#===================================================================
	function getTime( $data  ) {
		
		#- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
		$stderr = fopen('php://stderr', 'w');
		fwrite( $stderr, "Client: $data\n" );
		$suma = $data[0]+$data[1];
		return $suma;
	}
	
	#-------------------------------------------------------------------
	# wylaczanie pamieci cache jest sensowne jedynie przy tworzeniu serwisu
	//ini_set("soap.wsdl_cache_enabled", "0");
	
	$server = new SoapServer("example.wsdl");
	$server->addFunction("getTime");
	$server->handle();
	
	#===================================================================

?>

