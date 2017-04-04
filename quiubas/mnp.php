<?php

namespace Quiubas;

class MNP extends Base {
	/**
	 * @param string Base path
	 */
	public static $base = 'mnp';

	/**
	 * @param string Action path
	 */
	public static $action = 'mnp/{number}';

	/**
	 * @param string $number
	 * @param array $params Parameters
	 */
	public static function getResponses( $number, $params = array() ) {
		return \Quiubas\Network::get( array( static::$action, array( 'number' => $number ) ), $params );
	}
}