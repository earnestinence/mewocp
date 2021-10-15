<?php
/*
 * App Core Class
 * Creates URL & loads core controller
 * URL FORMAT - /controller/method/params
 */
class Core
{
    protected $currentControl = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        //print_r($this->getURL());
        $url = $this->getURL();

        // Look in controllers for first value
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
            // If exists, set as current controller
            $this->currentControl = ucwords($url[0]);
            // unset 0 Index
            unset($url[0]);
        }
        // Require the controllers
        require_once '../app/controllers/'. $this->currentControl . '.php';

        // Instantiate control class
        $this->currentControl = new $this->currentControl;
        
        // Check for second part of the url
        if (isset($url[1])){
            // check to see if method exists in controller
            if (method_exists($this->currentControl, $url[1])){
                $this->currentMethod = $url[1];
                // Unset 1 index
                unset($url[1]);
            }
        }
        // Get Params
        $this->params = $url ? array_values($url) : [];

        // Call a callback with array of params
        call_user_func_array([$this->currentControl, $this->currentMethod], $this->params);
    }

    public function getURL(){
        if (isset($_GET['url'])){
            $url = rtrim($_GET['url'],  '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        }
    }
}