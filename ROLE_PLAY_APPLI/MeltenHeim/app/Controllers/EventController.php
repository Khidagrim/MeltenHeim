<?php
namespace App\Controllers;

use App\Models\Entity;
use App\Models\Biome;
use App\Models\Events;

class EventController extends Controller {

  /**
   * La page d'accueil.
   */
   public function index()
   {
	   $biomes = Biome::getInstance()->getAll();
		$this->display(
			'backoffice/events/events.html.twig',
			[
				"biomes"=>$biomes
			]
		);
	}

	public function get($biomeId)
	{
		$events = Events::getInstance()->getAllByBiomeId($biomeId);
		$rnd = rand(0,count($events)-1);

		echo json_encode($events[$rnd]);
	}
}