<?php 
namespace App\Core;
class Form {
    
    /**
     * valid verifie si les champs demander d'un formulaire est rempli
     *
     * @param  array $form
     * @param  array $fields
     * @return bool
     */
    public static function valid(array $form, array $fields){
        // On parcourt chaque champ
        foreach($fields as $field){
            // Si le champ est absent ou vide dans le tableau
            if(!isset($form[$field]) || empty($form[$field]) || $form[$field] == ""){
                // On sort en retournant false
                $_SESSION['alert'] = [
                    "type" => "warnig",
                    "msg" => "Veiller remplir tous les champs"
                ];
                return false;
            }
        }
        return true;
    }
    
    /**
     * verifyNumber verifi si le numero contient que des nombres
     *
     * @return void
     */
    public  static function verifyNumber()
    {
        $_POST["number"] = str_replace(' ', '',$_POST["number"]);
        echo $_POST["number"];
        if (!ctype_digit($_POST['number'])) {
            //echo $_POST['number'];
            $_SESSION['alert'] = [
                "type" => "danger",
                "msg" => "Le numero de telephone est incorrect"
            ];
            return false;
        }
        return true;
    }
}