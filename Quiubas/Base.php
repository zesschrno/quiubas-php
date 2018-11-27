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
	public static function get($params = false ) {
        $backtrace=debug_backtrace();
		if($backtrace[1]['function']=="getResponses") {
			$path=static::$actionResponses;
		} else {
			$path=static::$action;
		}
		if ( gettype( $params ) === 'array' ) {
			if (array_key_exists('id', $params)) {
				$id=$params['id'];
				$prepared_params=(array( $path, array('id'=>$id)));
			} else {				
				print_r("Provide an ID in array");
				exit();
			}
		} else {
			$prepared_params=(array( $path, array('id'=>false)));
		}

		
		return \Quiubas\Network::get($prepared_params);
	}

	/**
	 * @param string $id ID
	 * @param array $params Parameters
	 */
	public static function delete( $id = false, $params = array() ) {
		if ( gettype( $id ) === 'array' ) {
			$params = $id;
			$id = false;
		}

		return \Quiubas\Network::delete( array( static::$action, array( 'id' => $id ) ), $params );
	}

	/**
	 * @param string $id ID
	 * @param array $params Parameters
	 */
	public static function update( $id = false, $params = array() ) {
		if ( gettype( $id ) === 'array' ) {
			$params = $id;
			$id = false;
		}

		return \Quiubas\Network::put( array( static::$action, array( 'id' => $id ) ), $params );
	}

	/**
	 * @param array $params Parameters
	 */
	public static function getAll( $params = array() ) {
		return \Quiubas\Network::get( static::$base, $params );
	}
}

