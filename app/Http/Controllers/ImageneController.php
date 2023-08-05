<?php

namespace App\Http\Controllers;

use App\Models\Imagene;
use Illuminate\Http\Request;

/**
 * Class ImageneController
 * @package App\Http\Controllers
 */
class ImageneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes = Imagene::paginate();

        return view('imagene.index', compact('imagenes'))
            ->with('i', (request()->input('page', 1) - 1) * $imagenes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $imagene = new Imagene();
        return view('imagene.create', compact('imagene'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Imagene::$rules);

        $imagene = Imagene::create($request->all());

        return redirect()->route('imagenes.index')
            ->with('success', 'Imagene created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imagene = Imagene::find($id);

        return view('imagene.show', compact('imagene'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imagene = Imagene::find($id);

        return view('imagene.edit', compact('imagene'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Imagene $imagene
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imagene $imagene)
    {
        request()->validate(Imagene::$rules);

        $imagene->update($request->all());

        return redirect()->route('imagenes.index')
            ->with('success', 'Imagene updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $imagene = Imagene::find($id)->delete();

        return redirect()->route('imagenes.index')
            ->with('success', 'Imagene deleted successfully');
    }
}
