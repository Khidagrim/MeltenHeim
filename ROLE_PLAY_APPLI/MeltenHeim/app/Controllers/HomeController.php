<?php
namespace App\Controllers;

class HomeController extends Controller {

  /**
   * La page d'accueil.
   */
	public function index()
   {
		$this->display(
			'home.html.twig'
		);
	}
}