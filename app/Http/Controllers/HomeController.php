<?php

namespace App\Http\Controlles;
use App\Http\Response;

class HomeController
{
    public function index()
    {
        return new Response('home');
    }
}