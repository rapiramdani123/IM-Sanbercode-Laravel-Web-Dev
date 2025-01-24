<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use \Illuminate\Support\Facedes\DB;

class castcontroller extends Controller
{
    //
    public function create(){
        return view ('cast.tambah');
    }
    public function store(Request $request){
        $validated = $request->validate(rules: [
        'name' => 'required',
        'age' => 'required',
        'bio' => 'required'
        ]);
        
        DB::table('casts')->insert([
            'name' => $request['name'],
            'age'=> $request['age'],
            'bio'=> $request['bio']
        ]);
        return redirect('/cast');

}}
