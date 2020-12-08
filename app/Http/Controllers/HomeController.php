<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto;

class HomeController extends Controller
{
    public function index() {
        $autos = Auto::all();


        return view('home', compact('autos'));

    }
}