<?php

namespace Quiubas;

if ( defined( 'QUIUBAS_BASE_PATH' ) === false ) {
	define( 'QUIUBAS_BASE_PATH', dirname( __FILE__ ) . '/' );
}

spl_autoload_register(function($class) {
	$class = strtolower(str_replace('\\', '/', $class));
	require_once QUIUBAS_BASE_PATH . $class . '.php';
});

