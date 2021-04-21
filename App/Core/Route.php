<?php

namespace App\Core;

class Route  extends Error
{
    private $params;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->params = explode('/', $_GET["url"]);
    }
    
    /**
     * run NETTOIE L'URL
     *
     * @return void
     */
    public function run()
    {
        // Netoiyage d'url
        $uri = $_SERVER["REQUEST_URI"];
        //  on verifi si l'url n'est pas vite et si le nerdiner cattactere fini par un /
        if ($uri[-1] === '/' && !empty($uri)) {
            //on enleve le dernier /
            $uri = substr($uri, 0, -1);
            //  on envoie un code de redirection permanente et et redirige ver l'url sans le /
            http_response_code(301);
        }
    }
    
    /**
     * get ROUTER CHARGER DE LA REDIRECTION
     *
     * @param  string $phath
     * @param  string $actions
     * @return void
     */
    public function get(string $phath, string $actions)
    {
        //  on netoi l'url
        $this->run();
        //on enleve le premier slach de $uri
        $phath = substr($phath, 1);
        $uri = explode('/', $phath);
        
        //  pour notre projet on s'assur a avoir que 2 parametres au maximum
        if (count($this->params) === count($uri) && Securite::securiteHTML($this->params[0]) === $uri[0]) {
            //  on casse l'action pour recuperer le controlleur et la methode
            $action = explode('@', $actions);
            $controller = 'App\\Controllers\\' . $action[0];
            $controller = new $controller();
            $method = $action[1];
            //  on verifi si la methode existe dans la class
            if(method_exists($controller,$method))
            {
                //  on excute la methode
                if (isset($this->params[1])) {
                    return ctype_digit($this->params[1]) ? $controller->$method($this->params[1]) : $this->index();
                } else {
                    return isset($this->params[0]) ? $controller->$method() : $this->index();
                }
            }
        }
    }
}
