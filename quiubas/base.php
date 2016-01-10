<?php

namespace Quiubas;

class Base {
	/**
	 * @param array $params Parameters
	 */
	public static function action( $params ) {
		return \Quiubas\Network::post( static::$base, $params );
	}

	/**
	 * @param string $id ID
	 */
	public static function get( $id ) {
		return \Quiubas\Network::get( array( static::$action, [ 'id' => $id ] ) );
	}

	/**
	 * @param string $id ID
	 * @param array $params Parameters
	 */
	public static function delete( $id, $params = array() ) {
		return \Quiubas\Network::delete( array( static::$action, [ 'id' => $id ] ), $params );
	}

	/**
	 * @param string $id ID
	 * @param array $params Parameters
	 */
	public static function update( $id, $params = array() ) {
		return \Quiubas\Network::put( array( static::$action, [ 'id' => $id ] ), $params );
	}

	/**
	 * @param array $params Parameters
	 */
	public static function getAll( $params = array() ) {
		return \Quiubas\Network::get( static::$base, $params );
	}
}

