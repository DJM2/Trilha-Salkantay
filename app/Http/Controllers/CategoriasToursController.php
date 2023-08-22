<?php

namespace App\Http\Controllers;

use App\Models\CategoriasTours;
use Illuminate\Http\Request;

class CategoriasToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = CategoriasTours::all();
        return view('tours.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tours.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'slug' => 'required|string|unique:categorias_tours|max:255',
        ]);

        $categoria = new CategoriasTours;
        $categoria->nombre = $validatedData['nombre'];
        $categoria->slug = $validatedData['slug'];
        $categoria->save();

        return redirect()->route('categorias.index')->with('success', 'Categoria creada con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriasTours  $categoriasTours
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriasTours $categoriasTours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoriasTours  $categoriasTours
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = CategoriasTours::findOrFail($id);
        return view('tours.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoriasTours  $categoriasTours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'slug' => 'required|string|unique:categorias_tours,slug,' . $id . '|max:255',
        ]);

        $categoria = CategoriasTours::findOrFail($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->slug = $request->input('slug');
        $categoria->save();

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriasTours  $categoriasTours
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = CategoriasTours::query()->find($id);
        $categoria->delete();
        return redirect()->route('categorias.index')
            ->with('success', 'Categoria eliminada correctamente!');
    }
}