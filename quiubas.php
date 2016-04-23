<?php

namespace Quiubas;

if ( defined( 'QUIUBAS_BASE_PATH' ) === false ) {
	define( 'QUIUBAS_BASE_PATH', dirname( __FILE__ ) . '/' );
}

spl_autoload_register(function($class) {
	$class = QUIUBAS_BASE_PATH . strtolower(str_replace('\\', '/', $class)) . '.php';
	if ( file_exists($class) === true ) {
		require_once $class;
	}
}, false, true);
