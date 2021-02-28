<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function home() {
        return view('home');
    }

    public function today() {
        return view('today');
    }

    public function menu() {
        return view('menu');
    }
    public function contact() {
        return view('contact');
    }
}
