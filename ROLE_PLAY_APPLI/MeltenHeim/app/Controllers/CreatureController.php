<?php
namespace App\Controllers;

use App\Models\Entity;
use App\Models\Biome;
use App\Models\Habiter;

class CreatureController extends Controller {

  /**
   * La page d'accueil.
   */
	public function index()
   {
	$creatures = Entity::getInstance()->getAllCreaturesByBiomes();
	$biomes = Biome::getInstance()->getAll();
	$this->display(
			'backoffice/creatures/creatures.html.twig',
			[
				'creatures' => $creatures,
				'biomes' => $biomes
			]
		);
	}

	public function getEntity($id)
	{
		return Entity::getInstance()->get($id);;
	}


	public function get($id)
	{
	  $creature = $this->getEntity($id);
	  echo json_encode($creature); 
	}

	public function getWithLevel ($id,$lvl)
	{
		$entity = $this->getEntity($id);

		$entity["Vie"] *= 1/5 * $lvl;
		$entity["Vie"]  = intval($entity["Vie"]);

		$entity["Force"] *= 1/5 * $lvl;
		$entity["Force"]  = intval($entity["Force"]);
		
		$entity["Dext"] *= 1/5 * $lvl;
		$entity["Dext"]  = intval($entity["Dext"]);

		$entity["Init"] *= 1/5 * $lvl;
		$entity["Init"]  = intval($entity["Init"]);

		$entity["Magie"] *= 1/5 * $lvl;
		$entity["Magie"]  = intval($entity["Magie"]);

		$entity["Mana"] *= 1/5 * $lvl;
		$entity["Mana"]  = intval($entity["Mana"]);

		$entity["Symbiose"] *= 1/5 * $lvl;
		$entity["Symbiose"]  = intval($entity["Symbiose"]);

		$entity["Rage"] *= 1/5 * $lvl;
		$entity["Rage"]  = intval($entity["Rage"]);

		$entity["Armure_phy"] *= 1/5 * $lvl;
		$entity["Armure_phy"]  = intval($entity["Armure_phy"]);

		$entity["Armure_mag"] *= 1/5 * $lvl;
		$entity["Armure_mag"]  = intval($entity["Armure_mag"]);

		$entity["lvl"] = $lvl;
		echo json_encode($entity); 
	}
}