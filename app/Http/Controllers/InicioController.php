<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    function index(Request $peticion){
    $arreglo=['nombre'=>$peticion->query('nombre','NN')];
    return view('vista1')->with($arreglo);
    }
}
