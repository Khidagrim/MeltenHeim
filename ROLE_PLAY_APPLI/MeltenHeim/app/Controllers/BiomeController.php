<?php
namespace App\Controllers;

use App\Models\Biome;

class BiomeController extends Controller {

  /**
   * La page d'accueil.
   */
	public function index()
   {
	   $biomes = Biome::getInstance()->getAll();
		$this->display(
			'backoffice/biome/biome.html.twig',
			[
				'biomes' => $biomes
			]
		);
	}

	public function detail($id)
	{
		$biome = Biome::getInstance()->get($id);
		$this->display(
			'backoffice/biome/biome-detail.html.twig',
			[
				'biome' => $biome
			]
		);
	}

}