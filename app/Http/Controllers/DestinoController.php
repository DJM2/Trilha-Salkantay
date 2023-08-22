<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinos = Destino::all();
        /* foreach ($destinos as $destino) {
            $destino->descripcion = Str::words($destino->descripcion, 40, '...');
        } */
        return view('destinos.en.index', compact('destinos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('destinos.en.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'img' => 'required|image|max:2048',
            'imgThumb' => 'required|image|max:1048',
            'keywords' => 'required',
            'slug' => 'required|unique:destinos',
        ]);

        $imageName = $request->file('img')->getClientOriginalName();
        $request->file('img')->move(public_path('img/destinos'), $imageName);

        $imageThumb = $request->file('imgThumb')->getClientOriginalName();
        $request->file('imgThumb')->move(public_path('img/destinos/thumb'), $imageThumb);

        $destino = Destino::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'img' => $imageName,
            'imgThumb' => $imageThumb,
            'keywords' => $request->keywords,
            'slug' => $request->slug,
        ]);
        return redirect()->route('destinos.index')->with('success', 'Destino creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destino  $destino
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destino = Destino::findOrFail($id);
        return view('destinos.en.edit', compact('destino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'img' => 'image|max:2048',
            'imgThumb' => 'image|max:1048',
            'keywords' => 'required',
            'slug' => 'required|unique:destinos,slug,' . $id,
        ]);

        $destino = Destino::findOrFail($id);

        if ($request->hasFile('img')) {
            $imageName = $request->file('img')->getClientOriginalName();
            $request->file('img')->move(public_path('img/destinos'), $imageName);
            $destino->img = $imageName;
        }

        if ($request->hasFile('imgThumb')) {
            $imageThumb = $request->file('imgThumb')->getClientOriginalName();
            $request->file('imgThumb')->move(public_path('img/destinos/thumb'), $imageThumb);
            $destino->imgThumb = $imageThumb;
        }

        $destino->nombre = $request->nombre;
        $destino->descripcion = $request->descripcion;
        $destino->keywords = $request->keywords;
        $destino->slug = $request->slug;
        $destino->save();

        return redirect()->route('destinos.index')->with('success', 'Destino actualizado correctamente');
    }
    public function show($slug)
    {
        $destino = Destino::where('slug', $slug)->firstOrFail();
        return view('destinos.en.show', compact('destino'));
    }
    public function lista()
    {
        
        return view('destinos.en.lista');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destino = Destino::findOrFail($id);

        // Eliminar las imágenes y miniaturas si existen
        if ($destino->img) {
            $imgPath = public_path('img/destinos/') . $destino->img;
            if (file_exists($imgPath)) {
                unlink($imgPath);
            }
        }

        if ($destino->imgThumb) {
            $imgThumbPath = public_path('img/destinos/thumb/') . $destino->imgThumb;
            if (file_exists($imgThumbPath)) {
                unlink($imgThumbPath);
            }
        }

        // Eliminar el registro de la base de datos
        $destino->delete();

        return redirect()->route('destinos.index')->with('success', 'Destino eliminado correctamente');
    }

}