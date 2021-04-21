<?php 
namespace App;
class Autoloader 
{
    
    /**
     * web
     *
     * @return void
     */
    public static function web()
    {
        //  on met une detection automatique des intenciation de class
        //  permetant d'executer automatiquement une methode
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    public static function autoload($class)
    {
        // on enleve le namespace pour recuperer notre classe
        $class = str_replace(__NAMESPACE__."\\", "", $class);

        //  on remplace les anti slache par des slach 
        $class = str_replace("\\", "/", $class);
        // on sassure que notre autoload ne charge pas un fichierr innexstant
        $path =  __DIR__.'/App/'.$class .'.php' ;
        //echo $path ."<br>";
        //  verification si le fichier existe
        if(file_exists($path))
        {
            require_once $path;
        }
        else {
            die("La page n'existe pas");
        }
    }
}