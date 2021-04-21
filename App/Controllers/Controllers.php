<?php 
namespace App\Controllers;
class Controllers 
{

    
    /**
     * render le en liaison entre le clien et le serveur
     *
     * @param  mixed $title titre de la page
     * @param  mixed $description description de la page
     * @param  mixed $path le chemn direct vers le fichier ou se trouve notre page
     * @return void
     */
    public function render(string $title, string $description, string $pathName)
    {
        $title = $title;
        $description = $description;

        ob_start();
        require_once 'App/frontend/views/'.$pathName.'.view.php';
        $contents = ob_get_clean();
        require 'App/frontend/template/default.php';
    }
}