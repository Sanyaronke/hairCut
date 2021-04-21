<?php 
namespace App\Core;
class Securite{
        
    /**
     * securiteHTML convertion de tout caratere en entité html
     *
     * @param  string $path url de page ou nom sortant d'un formulaire 
     * @return void
     */
    public static function securiteHTML(string $path)
    { 
        return htmlentities($path);
    }
}