<?php

if (! functin_exists('view')) {
    function view($view){
        return new App\Http\Response($view);
    }
}

if (! functin_exists('viewPath')) {
    function viewPath($view){
        return new __DIR__ . "/../views/$view.php";
    }
}