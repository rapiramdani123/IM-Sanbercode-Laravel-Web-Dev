<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index () {
        return view('home');
    }

    public function login () {
        return view('register');
    }
    public function laravel(){
        return view('halaman1');
    }
}
