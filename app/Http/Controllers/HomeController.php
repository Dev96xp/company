<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()  //Indica que va administrar solouna ruta
    {
        return view('welcome');
    }
}
