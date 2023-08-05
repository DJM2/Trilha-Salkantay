<?php

namespace App\Http\Controllers;

use App\Models\Toursen;
use Illuminate\Http\Request;

class ToursenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours=Toursen::all();
        return view('toursen.index')->with('tours', $tours);
    }
    /* public function mostrar(){
        $tours=Toursen::all();
        return view('index')->with('tours', $tours);
    } */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('toursen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tours = new Toursen();

        $tours->id = $request->get('id');
        $tours->nombre = $request->get('nombre');
        $tours->descripcion = $request->get('descripcion');

        $tours->resumen = $request->get('resumen');
        $tours->detallado = $request->get('detallado');
        $tours->contenido = $request->get('contenido'); 
        $tours->incluidos = $request->get('incluidos');        
        $tours->importante = $request->get('importante');  

        $tours->precio = $request->get('precio');
        $tours->dias = $request->get('dias');
        $tours->ubicacion = $request->get('ubicacion');

        $img = $request->file('img');
        $rutaImg = public_path("img/buscador/");
        $imgTour = time() . "." . $img->getClientOriginalName();
        $img->move($rutaImg, $imgTour);
        $tours['img'] = "$imgTour";

        $cat = $request->get('categoria');
        $tours->categoria= implode(', ', $cat); 
        $tours->keywords = $request->get('keywords');      
        $tours->slug = $request->get('slug');
        $tours->clase = $request->get('clase');

        $tours->save();
        session()->flash('status', 'Tour creado exitosamente!');
        return redirect('toursen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toursen  $toursen
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug)
    {
        $tour = Toursen::find($id);
        return view('toursen.show')->with('tour', $tour);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toursen  $toursen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Toursen::find($id);
        return view('toursen.edit')->with('tour', $tour);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toursen  $toursen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tour = Toursen::find($id);

        $tour->nombre = $request->get('nombre');
        $tour->descripcion = $request->get('descripcion');
        
        $tour->resumen = $request->get('resumen');
        $tour->detallado = $request->get('detallado');
        $tour->contenido = $request->get('contenido'); 
        $tour->incluidos = $request->get('incluidos');        
        $tour->importante = $request->get('importante'); 

        $tour->precio = $request->get('precio');
        $tour->dias = $request->get('dias');
        $cat = $request->get('categoria');
        $tour->categoria= implode(',', $cat); 
        $tour->ubicacion = $request->get('ubicacion');
        $tour->keywords = $request->get('keywords');

        if ($img = $request->file('img')) {
            $rutaImg = public_path("img/buscador/");
            $imgTour = time() . "." . $img->getClientOriginalExtension();
            $img->move($rutaImg, $imgTour);
            $tour['img'] = "$imgTour";
        } else {
            unset($tour['img']);
        }

        $tour->save();
        session()->flash('status', 'Tour actualizado exitosamente!');
        return redirect('/toursen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toursen  $toursen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Toursen::find($id);
        $tour->delete();
        session()->flash('status', 'Tour borrado exitosamente!');
        return redirect('/toursen');
    }
}
