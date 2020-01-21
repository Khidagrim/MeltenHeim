<?php
namespace App\Controllers;

use App\Models\Entity;

class FightController extends Controller {

  /**
   * La page d'accueil.
   */
   public function index()
   {
	   $creatures = Entity::getInstance()->getAllReduced();
		$this->display(
			'backoffice/fight/fight.html.twig',
			[
				"creatures"=>$creatures
			]
		);
	}

	public function get($creatureId)
	{
        $creature = Entity::getInstance()->get($creatureId);
		echo json_encode($creature);
	}
}