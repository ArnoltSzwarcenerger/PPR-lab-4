<?php
	#===================================================================
	if( preg_match( "/^wsdl$/i", $_SERVER['QUERY_STRING'] ) ){ 
		$wsdl = file_get_contents( 'srv.wsdl' );
		if( $wsdl )
			echo $wsdl;
	}else{ 
		class PPRSrv {
			public function simpleService( $str ){
				return $str;
			}
		}
		
		#- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
		$opt = array( 'uri' => 'http://127.0.0.1/soap/php/srv.php' );
		$srv = new SoapServer( NULL, $opt );
		$srv->setClass('PPRSrv');
		$srv->handle();
	}
	#===================================================================
?>

