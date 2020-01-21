<?php
namespace App\Controllers;

use App\Models\Entity;
use App\Models\Level;

class characGenController extends Controller {

  /**
   * La page d'accueil.
   */
	public function index()
   {
        $races = Entity::getInstance()->getAllSpecific("race");
        $classes = Entity::getInstance()->getAllSpecific("classe");
		$this->display(
			'backoffice/characters/characgen.html.twig',
			[
                'races' => $races,
                'classes' => $classes
			]
		);
   }
   
   public function getCharacter($raceId,$classeId,$lvl)
   {
      $race = Entity::getInstance()->get($raceId);
      $classe = Entity::getInstance()->get($classeId);
      $levels = Level::getInstance()->getByClass($classe["SpecialData"],$lvl);

      $sumLvl = [];
      $specific_text="";

      foreach($levels as $key => $value)
      {
         foreach($value as $key2 => $value2)
         {
            if(!isset($sumLvl[$key2]))
            {
               $sumLvl[$key2] = intval($value2);
            }
            else
            {
               $sumLvl[$key2] += intval($value2);
            }
            if($key2 == "Specific" )
            {
               if(strlen($value2) > 1)
               {
                  $specific_text.= "\n".$value2;
               }
            }
         }
      }

      $sumLvl["Specific"] = $specific_text;


      $character = [];
      $character["Nom"] = $race["Nom"]."-".$classe["Nom"]."-lvl".$lvl;
      $character["Vie"] = $race["Vie"] + $classe["Vie"] + $sumLvl["Vie"];
      $character["Force"] = $race["Force"] + $classe["Force"] + $sumLvl["Force"];
      $character["Dext"] = $race["Dext"] + $classe["Dext"] + $sumLvl["Dext"];
      $character["Init"] = $race["Init"] + $classe["Init"] + $sumLvl["Init"];
      $character["Magie"] = $race["Magie"] + $classe["Magie"] + $sumLvl["Magie"];
      $character["Mana"] = $race["Mana"] + $classe["Mana"] + $sumLvl["Mana"];
      $character["Symbiose"] = $race["Symbiose"] + $classe["Symbiose"] + $sumLvl["Symbiose"];
      $character["Rage"] = $race["Rage"] + $classe["Rage"] + $sumLvl["Rage"];
      $character["Armure_phy"] = $race["Armure_phy"] + $classe["Armure_phy"] + $sumLvl["Armure_phy"];
      $character["Armure_mag"] = $race["Armure_mag"] + $classe["Armure_mag"] + $sumLvl["Armure_mag"];
      $character["Description"] = "Race = ".$race["Description"]."\n Classe = ".$classe["Description"] ."\n Level = ". $sumLvl["Specific"];
      $character["Image"] = $race["Image"];
      $character["Type"] = "Personnage";
      $character["Stats"] = $sumLvl["Stats"];

      echo json_encode($character);
   }

}