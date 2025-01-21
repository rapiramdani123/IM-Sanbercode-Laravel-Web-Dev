<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function send (Request $request) {
        
        $name1 = $request->input('nama1');
        $name2 = $request->input('nama2');
        return view ('page.welcome', ['name1' => $name1, 'name2' => $name2]);
       
        
        /*dd($request->input('nama1'));*/
    }
}
