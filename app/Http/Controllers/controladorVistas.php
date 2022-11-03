<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;

class controladorVistas extends Controller
{

  

    public function saveLibro(validadorLibro $req){
       
       return redirect('registro')->with('confirmacion','Procesado correctamente');
    }

     
    public function showMain(){

        return view('principal');
    }
    public function showRegistrar(){

        return view('registro');        
    }
    public function showWelcome(){
        return view('welcome');
    }

}
