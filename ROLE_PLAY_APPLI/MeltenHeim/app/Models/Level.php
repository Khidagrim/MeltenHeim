<?php 

namespace App\Models;

class Level extends Base {

	protected $tableName = 'level';
	private static $instance;

		public static function getInstance() {
		if (!isset(self::$instance)) {
			self::$instance = new Level();
		}
		return self::$instance;
    }
    
    public function getByClass($classe,$lvl)
    {
        $sql = "SELECT * FROM {$this->tableName} Where {$this->tableName}.Name = '$classe' and {$this->tableName}.unlockAtLevel <= $lvl ";
		return self::$dbh->query($sql)->fetchAll();
    }
}