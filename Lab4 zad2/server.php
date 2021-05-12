<?php
	#===================================================================
	function getTime( $a) {
		
		#- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
		$stderr = fopen('php://stderr', 'w');
		fwrite( $stderr, "Client: $a\n" );
		
		# ...lub krocej
		#fwrite( fopen('php://stderr', 'w'), "Client: $data\n" );
		#- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
		
		return dechex($a);
	}
	#-------------------------------------------------------------------
	# wylaczanie pamieci cache jest sensowne jedynie przy tworzeniu serwisu
	#ini_set("soap.wsdl_cache_enabled", "0");
	
	$server = new SoapServer("example.wsdl");
	$server->addFunction("getTime");
	$server->handle();
	#===================================================================

?>

