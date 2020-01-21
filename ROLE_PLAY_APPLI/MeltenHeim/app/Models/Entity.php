<?php 

namespace App\Models;

class Entity extends Base {

	protected $tableName = 'entity';
	protected $tableNameHabiter = 'Habiter';
	protected $tableNameBiome = 'Biome';
	protected $tableNameType = 'entity_type';
	private static $instance;

		public static function getInstance() {
		if (!isset(self::$instance)) {
			self::$instance = new Entity();
		}
		return self::$instance;
	}

	public function getAllCreaturesByBiomes()
	{
		$sql = "SELECT {$this->tableNameBiome}.id, {$this->tableNameBiome}.type FROM {$this->tableNameBiome}";
		$allBiome = self::$dbh->query($sql)->fetchAll();

		$sql = "SELECT {$this->tableName}.id, Nom, {$this->tableNameBiome}.type,{$this->tableNameHabiter}.biomeId from {$this->tableNameBiome},{$this->tableName},{$this->tableNameHabiter} where {$this->tableNameHabiter}.biomeId = {$this->tableNameBiome}.id and {$this->tableNameHabiter}.entityId = {$this->tableName}.id and {$this->tableName}.Type = 'creature'";
		$allCreaBiome = self::$dbh->query($sql)->fetchAll();

		$end = [];

		foreach($allBiome as $biome => $value)
		{
			$creatures = [];
			foreach($allCreaBiome as $creaBiome => $value2)
			{
				if($value["id"] == $value2["biomeId"])
				{
					$creatures[] = $value2;
				}
			}
			$value["creatures"] = $creatures;
			$end[] = $value;
		}
		return $end;
	}

	public function getAllReduced()
	{
		$sql = "SELECT id,Nom FROM {$this->tableName} where {$this->tableName}.Type != 'classe' and {$this->tableName}.Type != 'race' ORDER BY Nom Asc";
		return self::$dbh->query($sql)->fetchAll();
	}

	public function getAllSpecific($spe)
	{
		$sql = "SELECT * FROM {$this->tableName} where {$this->tableName}.Type = '$spe' ORDER BY Nom Asc";
		return self::$dbh->query($sql)->fetchAll();
	}

	public function getAll()
	{
		$sql = "SELECT * FROM {$this->tableName} ORDER BY Nom Asc";
		return self::$dbh->query($sql)->fetchAll();
	}
	

}