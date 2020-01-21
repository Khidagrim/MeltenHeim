<?php 

namespace App\Models;

class Habiter extends Base {

	protected $tableName = 'biome';
	private static $instance;

		public static function getInstance() {
		if (!isset(self::$instance)) {
			self::$instance = new Habiter();
		}
		return self::$instance;
	}
}