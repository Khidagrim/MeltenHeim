<?php 

namespace App\Models;

class Biome extends Base {

	protected $tableName = 'biome';
	private static $instance;

		public static function getInstance() {
		if (!isset(self::$instance)) {
			self::$instance = new Biome();
		}
		return self::$instance;
	}
}