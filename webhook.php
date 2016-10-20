<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/20/16
 * Time: 8:55 AM
 */
/* Require the lib/Beyonic.php to included to access the interface objects */
require( 'lib/Beyonic.php' );

/* Set the API Key to be used in all requests */
Beyonic::setApiKey( '74ec697d07e59bedeff21a14ad150a05bb9779a6' );

/* Get the available Collection Requests */
$resp = Beyonic_Collection_Request::getAll();
$results = $resp['results'];
echo 'GetAll CollectionRequests Response Code: ' . Beyonic::$lastResult['httpResponseCode'] . "\n";
foreach( $results as $key => $value )

  if( is_object( $value ) || is_array( $value ) ) {
      echo json_encode($results);
  }
//    echo "Key: $key\n";
//    foreach( $value as $k => $v )
//      echo "\t$k:$v\n";
//  }
//  else
//    echo "Key: $key\tValue: $value\n";