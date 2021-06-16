<?php

namespace App\Http\Controlles;

class HomeController
{
    public function index()
    {
        return new view('home');
    }
}