<?php 

namespace App\Models;

class Events extends Base {

    protected $tableName = 'events';
    protected $tableNameBiome = 'biome';
	private static $instance;

		public static function getInstance() {
		if (!isset(self::$instance)) {
			self::$instance = new Events();
		}
		return self::$instance;
    }
    
    public function getAllByBiomeId($biomeId)
    {
        $sql = "SELECT * FROM {$this->tableName} where Biome = $biomeId ";
		return self::$dbh->query($sql)->fetchAll();
    }
}