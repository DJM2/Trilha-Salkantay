<?php

namespace App\Http\Controllers;

use App\Models\categoriasblog;
use Illuminate\Http\Request;

class Categoriasblogs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = categoriasblog::all();
        return view('blog.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = new categoriasblog();
        return view('blog.categorias.create', compact('categoria'));
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
            'nombre' => 'required|unique:categoriasblogs,nombre'
        ]);
        $categorias = categoriasblog::create($request->all());
        return redirect()->route('cat.tag.index', compact('categorias'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $categoriasblogs
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categoria = categoriasblog::where('slug', $slug)->firstOrFail();
        return view('blog.categorias.show', compact('categoria'));
    }

    /* public function show(categoriasblog $categoriasblog)
    {
    $categoria = $categoriasblog;
    return view('blog.categorias.show', compact('categoria'));
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoriasblog $categoriasblog)
    {
        $categoria = $categoriasblog;
        return view('blog.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $categoriasblogs
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, categoriasblog $categoriasblog)
    {
        $request->validate([
            'nombre' => 'required|unique:categoriasblogs,nombre,' . $categoriasblog->id,
        ]);

        $categoria = $categoriasblog;
        $categoria->nombre = $request->nombre;
        $categoria->save();

        return redirect()->route('cat.tag.index')->with('success', 'Categoría actualizada exitosamente.');
    }

    /* public function update(Request $request, categoriasblog $categoriasblog)
    {
    $categoria = $categoriasblog;
    return redirect()->route('cat.tag.edit', compact('categoria'));
    } */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $categoriasblogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoriasblog $categoriasblog)
    {
        $categoria = $categoriasblog->delete();

        return redirect()->route('cat.tag.index')
            ->with('success', 'Categoria eliminada con éxito!');
    }
}