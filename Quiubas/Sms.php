<?php

namespace Quiubas;

class SMS extends Base {
	/**
	 * @param string Base path
	 */
	public static $base = 'sms';

	/**
	 * @param string Action path
	 */
	public static $action = 'sms/{id}';

	/**
	 * @param array $params Parameters
	 */
	public static function send( $params ) {
		return parent::action( $params );
	}

}

