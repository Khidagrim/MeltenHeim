<?php

$route->addRoute('GET', '/', 'HomeController@index');
$route->addRoute('GET', '/index', 'HomeController@index');


$route->addRoute('GET', '/biome', 'BiomeController@index');
$route->addRoute('GET', '/biome/{id:[0-9]+}', 'BiomeController@detail');


$route->addRoute('GET', '/creature', 'CreatureController@index');
$route->addRoute('GET', '/creature/{id:[0-9]+}', 'CreatureController@get');


$route->addRoute('GET', '/events', 'EventController@index');
$route->addRoute('GET', '/events/get/{biomeId:[0-9]+}', 'EventController@get');


$route->addRoute('GET', '/fight', 'FightController@index');
$route->addRoute('GET', '/fight/{id:[0-9]+}/{lvl:[0-9]+}', 'CreatureController@getWithLevel');

$route->addRoute('GET','/characGen','characGenController@index');
$route->addRoute('GET','/characGen/{raceId:[0-9]+}/{classeId:[0-9]+}/{lvl:[0-9]+}','characGenController@getCharacter');
