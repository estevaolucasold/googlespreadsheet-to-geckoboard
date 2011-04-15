<?php

header('Content-type: application/json');
require_once( "functions.php" );

$url = urldecode( $_GET[ "url" ] );
$xml = perform_docs_request( $url );

switch( $_GET[ "action" ] )
{
	case "linechart":
		$output = lineChart( $xml );
		break;
	case "piechart":
		$output = pieChart( $xml );
		break;
}

echo json_encode( $output );

?>
