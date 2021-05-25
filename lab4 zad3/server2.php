<?php
	#===================================================================
	function getTime( $data  ) {
		
		#- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
		$stderr = fopen('php://stderr', 'w');
		fwrite( $stderr, "Proces II przeslal: $data\n" );
		
		
		//return $data;
	}
	#-------------------------------------------------------------------
	
	$server = new SoapServer("example2.wsdl");
	$server->addFunction("getTime");
	$server->handle();
	#===================================================================

?>

