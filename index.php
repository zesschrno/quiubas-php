<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Install the library by downloading the .zip file to your project folder.
// Load the library
require_once 'Quiubas.php';

\Quiubas\Quiubas::setAuth( '90d09e4d96b96c034eb99454562d7c6298d5846a', '346994780692eb152f73de68723029cdcc687cf7' );



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