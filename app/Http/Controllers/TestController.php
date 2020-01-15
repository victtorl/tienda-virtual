<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Product;

class TestController extends Controller
{
    //	
    public function welcome(){
         $products=Product::all();
        return view('welcome')->with(compact('products'));
        // return  "compact($products)";
         //compact nos devuelve un array 
        
    }
}
// ctrl +p buscamos el archivo y nos lleva al mismo