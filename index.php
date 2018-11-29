<?php
// Install the library by downloading the .zip file to your project folder.
// Load the library
require_once 'Quiubas.php';

\Quiubas\Quiubas::setAuth( 'API_KEY', 'API_PRIVATE' );



 $response = \Quiubas\MNP::getData(array(
   'number' => '381666226445'));

print_r($response);