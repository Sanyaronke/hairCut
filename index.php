<?php
session_start();
define('ROOT', dirname(__DIR__));// racine du projet
use App\Autoloader;
use App\Core\Route;

require 'Autoloader.php';
Autoloader::web();

//  APPEL DU ROUTER
$app = new Route;
// REDIRECTION OF PAGE
$app->get('/', 'HomeController@index');
$app->get('/contact', 'HomeController@contact');
$app->get('/about', 'HomeController@about');
$app->get('/send_question', 'TraitementController@sendContact');
$app->get('/rdv_question', 'TraitementController@rdvContact');

