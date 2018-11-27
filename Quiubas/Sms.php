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
	 * @param string ActionResponses path
	 */
	public static $actionResponses = 'sms/{id}/responses';

	/**
	 * @param array $params Parameters
	 */
	public static function send( $params ) {
		return parent::action( $params );
	}

	public static function get($params=false) {
		return parent::get($params);
	}

	public static function getAll($params=false) {
		return parent::get($params);
	}

	public static function getResponses($params=false) {
		return parent::get($params);
	}

}

