<?php

namespace App\Http\Controllers;

use App\Models\Toursen;
use Illuminate\Http\Request;

class SearchenController extends Controller
{
    public function search(Request $request)
    {
        $name=$request->all();
        $nombre = $name['name'];
        $respuesta = Toursen::where('nombre', 'LIKE',  "%$nombre%")->get();
        if(count($respuesta) != 0){
            $respuestas = [
                'respuestas' => $respuesta,
            ];
    
            return view('en.search', $respuestas);
        }
        else{
            return view('en.noresults');
        }
    }
}
