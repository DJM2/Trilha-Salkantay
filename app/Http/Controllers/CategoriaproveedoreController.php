<?php

namespace App\Http\Controllers;

use App\Models\Categoriaproveedore;
use Illuminate\Http\Request;

/**
 * Class CategoriaproveedoreController
 * @package App\Http\Controllers
 */
class CategoriaproveedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriaproveedores = Categoriaproveedore::paginate();

        return view('proveedores.categoriaproveedore.index', compact('categoriaproveedores'))
            ->with('i', (request()->input('page', 1) - 1) * $categoriaproveedores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriaproveedore = new Categoriaproveedore();
        return view('proveedores.categoriaproveedore.create', compact('categoriaproveedore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Categoriaproveedore::$rules);

        $categoriaproveedore = Categoriaproveedore::create($request->all());

        return redirect()->route('categoriaProveedores.index')
            ->with('success', 'Categoriaproveedore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoriaproveedore = Categoriaproveedore::find($id);

        return view('proveedores.categoriaproveedore.show', compact('categoriaproveedore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoriaproveedore = Categoriaproveedore::find($id);

        return view('proveedores.categoriaproveedore.edit', compact('categoriaproveedore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Categoriaproveedore $categoriaproveedore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|unique:blogcategorias,nombre,'.$id
        ]);
    
        $categoriaproveedore = Categoriaproveedore::find($id);
        $categoriaproveedore->nombre = $request->nombre;
        $categoriaproveedore->save();

        return redirect()->route('categoriaProveedores.index')
            ->with('success', 'Categoriaproveedore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $categoriaproveedore = Categoriaproveedore::find($id)->delete();

        return redirect()->route('categoriaProveedores.index')
            ->with('success', 'Categoriaproveedore deleted successfully');
    }
}
