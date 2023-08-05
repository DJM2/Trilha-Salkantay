<?php

namespace App\Http\Controllers;

use App\Models\Imagenes;
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes=Imagenes::all();
        return view('imagenes.index', compact('imagenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imagenes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen = new Imagenes();
        $img = $request->file('img');
        $rutaImg = public_path("img/galeria/");
        $imgTour = $img->getClientOriginalName();
        $img->move($rutaImg, $imgTour);
        $imagen['img'] = "$imgTour";
        $imagen->save();
        session()->flash('status', 'Imagen creada exitosamente!');
        return redirect('imagenes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imagen = Imagenes::find($id);
        return view('imagenes.show')->with('imagen', $imagen);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imagen = Imagenes::find($id);
        return view('imagenes.edit')->with('imagen', $imagen);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $imagen = Imagenes::find($id);
        if ($img = $request->file('img')) {
            $rutaImg = public_path("img/galeria/");
            $imgTour = $img->getClientOriginalName();
            $img->move($rutaImg, $imgTour);
            $imagen['img'] = "$imgTour";
        } else {
            unset($imagen['img']);
        }

        $imagen->save();
        session()->flash('status', 'Imagen actualizada exitosamente!');
        return redirect('imagenes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imagen = Imagenes::find($id);
        $imagen->delete();
        session()->flash('status', 'Imagen borrada exitosamente!');
        return redirect('imagenes');
    }
}
