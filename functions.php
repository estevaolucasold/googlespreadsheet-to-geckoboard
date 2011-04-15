<?php

error_reporting( E_ALL );

function perform_docs_request( $url )
{
    $ch = curl_init();

    curl_setopt( $ch, CURLOPT_SSLVERSION,     3 );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, true );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 2 );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch, CURLOPT_URL,            $url );
	curl_setopt( $ch, CURLOPT_HEADER, 0 );

    $data = curl_exec( $ch );

    curl_close( $ch );

    $xml = simplexml_load_string( $data );
    
    return $xml;
}

function lineChart( $xml )
{
	$output = array(
		"item" => array(),
		"settings" => array(
			"axisx" => array(),
			"colour" => "ff9900"
		)
	);
	$axisy = array();

	foreach( $xml->channel->item as $item )
	{
		$cell = preg_split( "/\, /", $item->description );

		array_push( $output[ 'settings'][ 'axisx' ], trim( (string)$item->title ) );

		$values = preg_split( "/\:/", $cell[0] );
		list( $column, $value ) = $values;

		array_push( $output[ 'item' ], trim( $value ) );
		array_push( $axisy, trim( $value ) );
	}

	sort( $axisy );

	$output[ 'settings' ][ 'axisy' ] = array(
		$axisy[ 0 ],
		$axisy[ count( $axisy ) - 1 ]
	);
	
	return $output;
}

function pieChart( $xml )
{
	$output = array(
		"item" => array()
	);

	foreach( $xml->channel->item as $item )
	{
		$cell = preg_split( "/\, /", $item->description );

		for( $i = 0; $i < count($cell); $i++ )
		{
			list( $column, $value ) = preg_split( "/\:/", $cell[ $i ] );

			if( $column == "valor" )
			{
				array_push(
					$output["item"], 
					array(
			            "text" => (string)$item->title,
			            "value"  => $value
			        )
				);
			}
		}
	}
	
	return $output;
}