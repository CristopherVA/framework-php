<?php

namespace App\Http;

class Response{

    $view;

    public function __contruct($view){
        $this->view = $view;
    }
    
    public function getView(){
        return $this->view;
    }

    public function send(){
        $view = $this->getView();

        $content = file_get_contents(__DIR__ . "../../views/$view.php");

        require __DIR__ . "/../../views/layout.php";
    }
}