<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function prueba()
    {
        //echo 'Hola Mundo';
        //$mjs = "Hola gente";
        $name= "jhonny";
        $edad = "21";
        $array=[1,2,3,4,5,'jhonny'];
        
        return view("TipoAnimal/index",compact('name', 'edad', 'array'));
    }    
}
