<?php
	#===================================================================
	
	function getTime( $data ) {
		//if($data != 'tajnehaslo'){
		$stderr = fopen('php://stderr', 'w');
		fwrite( $stderr, "Client: $data\n" );
		//global $glob;
		//$glob = dechex($data);
		return $data;
		//}else{
		//global $glob;
		//$glob = dechex($glob);
		//return $glob;
		//}
        //$port 	= 7778;
        //$host 	= '127.0.0.2';
        //$wsdl 	= 'http://' . $host . ':' . $port . '?wsdl';
        //$soap = new SoapClient( $wsdl, array( 'proxy_host' => "127.0.0.1", 'proxy_port' => 7778 ) );
        //$res  = $soap->getTime( $a);
    }
	#-------------------------------------------------------------------
	# wylaczanie pamieci cache jest sensowne jedynie przy tworzeniu serwisu
	//ini_set("soap.wsdl_cache_enabled", "0");
	$glob = 1;
	$server = new SoapServer("example.wsdl");
	$server->addFunction("getTime");
	$server->handle();
	
	#===================================================================

?>

