<?php

namespace App\Http\Controllers;

use App\Models\Buscadore;
use App\Models\Tour;
use Illuminate\Http\Request;

/**
 * Class BuscadoreController
 * @package App\Http\Controllers
 */
class BuscadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buscadores = Buscadore::all();
        return view('buscadore.index', compact('buscadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buscadore = new Buscadore();
        return view('buscadore.create', compact('buscadore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Buscadore::$rules);

        $buscadore = new Buscadore;
        $buscadore->nombre = $request->input('nombre');
        $buscadore->slug = $request->input('slug');
        $buscadore->save();

        return redirect()->route('cat.index')
            ->with('success', 'Buscadore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tag = Buscadore::query()->where('slug', $slug)->firstOrFail();
        $tours = Tour::all();
        $blogs = $tag->djmblogs()->get();
        return view('buscadore.show', compact('tag', 'blogs', 'tours'));
    }
    /* public function show($id)
    {
    $buscadore = Buscadore::query()->find($id);
    return view('buscadore.show', compact('buscadore'));
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buscadore = Buscadore::query()->find($id);

        return view('buscadore.edit', compact('buscadore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Buscadore $buscadore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(Buscadore::$rules);
        $buscadore = Buscadore::query()->findOrFail($id);
        $buscadore->nombre = $request->input('nombre');
        $buscadore->slug = $request->input('slug');
        $buscadore->save();

        return redirect()->route('cat.index')
            ->with('success', 'Tag actualizado correctamente!');
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $categoria = Buscadore::query()->find($id);
        $categoria->delete();

        return redirect()->route('cat.index')
            ->with('success', 'Tag eliminado correctamente!');
    }
}