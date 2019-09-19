<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //	
    public function welcome(){
    	return view('welcome');
    }
}
// ctrl +p buscamos el archivo y nos lleva al mismo