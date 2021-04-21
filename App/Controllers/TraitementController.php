<?php 
namespace App\Controllers;

use App\Core\Form;

class TraitementController {

    

    public function sendContact()
    {
        $data = [
            'name',
            'email',
            'number',
            'message'
        ];
        //  on verifie si le formulaire est valide
        if(!Form::valid($_POST, $data)) { header('Location:/contact');}
        //  on verifie le numero de telephone
        if(!Form::verifyNumber()) { header('Location:/contact');}
        // on retourne un message de succes s'y on ne rencontre pas d'eereur
        $_SESSION['alert'] = [
            "type" => "success",  
            "msg" => "un conseiller vous repondra dans les plus bref delais"
            ];
        header('Location:/contact');
    }
    
    /**
     * rdvContact traitement des formulaires de rendez vous
     *
     * @return void
     */
    public function rdvContact()
    {
        $data = [
            'info',
            'name',
            'email',
            'number'
        ];
        //  on verifie si le formulaire est valide
        if(Form::valid($_POST, $data)){ header('Location:/'); }
        //  on verifie le numero de telephone
        if(!Form::verifyNumber()) { header('Location:/'); }
        // on retourne un message de succes s'y on ne rencontre pas d'eereur
        $_SESSION['alert'] = [
            "type" => "success",  
            "msg" => " Votre message a ete envoyer"
            ];
        header('Location:/');
    }
}