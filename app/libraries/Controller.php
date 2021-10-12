<?php
/*
 * Base Controller
 * Loads the models and views
 */
class controller
{
    // Load Model
    public function model($tempModel){
        // Require model file
        require_once '../app/models/' . $tempModel .'.php';

        // Instantiate model
        return new $tempModel();
    }

    // Load View
    public function view($tempView, $tempData = []){
        // Check for the view file
        if (file_exists('../app/views/' .$tempView . '.php')){
            require_once '../app/views/' .$tempView . '.php';
        }else {
            // View does not exist
            die('Could not find view file');
        }
    }
}