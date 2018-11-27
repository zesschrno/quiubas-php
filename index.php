<?php
// Install the library by downloading the .zip file to your project folder.
// Load the library
require_once 'Quiubas.php';

\Quiubas\Quiubas::setAuth( 'API_KEY', 'API_PRIVATE' );



//$response = \Quiubas\SMS::send(array(
//    'to_number' => '+38162575600',
//    'message' => 'Hello there'
//));


//$response = \Quiubas\SMS::get(array(
//  'id' => '363487595'));

// $response = \Quiubas\SMS::getAll();


// $response = \Quiubas\SMS::getResponses(array(
//   'id' => '354552125'));


 $response = \Quiubas\MNP::getData(array(
   'number' => '381666226445'));

print_r($response);