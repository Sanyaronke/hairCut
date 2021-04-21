<?php

namespace App\Controllers;

class HomeController extends Controllers{
    
    /**
     * index  METHODE QUI RETOURNE LA PAGE D'ACCEUIL
     *
     * @return void
     */
    public function index() { $this->render('acceuil', "page d'acceuil", "/home");}

    /**
     * contact methode qui retourne la page de contact
     * 
     * @return void
     */
    public function contact() { $this->render('Contact', "page de contact", "/contact");}

    /**
     * about methode qui retourne la page d'apropos
     * 
     * @return void
     */
    public function about() { $this->render('Contact', "page de contact", "/about"); }
}