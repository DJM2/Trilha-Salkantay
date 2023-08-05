<?php

namespace App\Http\Controllers;

use App\Models\Djmblog;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::latest('updated_at')->get();
        return view('tours.index', compact('tours'));
    }
    
    public function mostrar()
    {
        $toursTrilhas = Tour::where('categoria', 'machupicchu')->orderBy('updated_at', 'desc')->take(6)->get();
        $blogs = Djmblog::with('categorias')->latest('created_at')->get();
        return view('index', compact('toursTrilhas', 'blogs'));
    }
    public function users()
    {
        $users = User::all();
        return view('auth.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar si ya existe un tour con el mismo slug
        $existingTour = Tour::where('nombre', $request->get('nombre'))->first();
        if ($existingTour) {
            session()->flash('error', 'El Titulo ingresado ya existe. Por favor, elige otro.');
            return redirect()->back()->withInput();
        }
        //Creacion de tours
        $tours = new tour();

        $tours->id = $request->get('id');
        $tours->nombre = $request->get('nombre');
        $tours->descripcion = $request->get('descripcion');

        $tours->contenido = $request->get('contenido');
        $tours->resumen = $request->get('resumen');
        $tours->detallado = $request->get('detallado');
        $tours->incluidos = $request->get('incluidos');
        $tours->importante = $request->get('importante');
        $tours->generales = $request->get('generales');

        $tours->precio = $request->get('precio');
        $tours->dias = $request->get('dias');
        $tours->ubicacion = $request->get('ubicacion');

        $img = $request->file('img');
        $rutaImg = public_path("img/buscador/");
        $imgTour = $img->getClientOriginalName();
        $img->move($rutaImg, $imgTour);
        $tours['img'] = "$imgTour";

        if ($request->hasFile('mapa')) {
            $rutaMapa = public_path("img/buscador/");
            $mapa = $request->file('mapa');
            $mapaTour = $mapa->getClientOriginalName();
            $mapa->move($rutaMapa, $mapaTour);
            $tours['mapa'] = "$mapaTour";
        } else {
            $mapaTour = null;
        }

        $cat = $request->get('categoria');
        $tours->categoria = implode(',', $cat);
        $tours->keywords = $request->get('keywords');
        $tours->slug = $request->get('slug');
        $tours->clase = $request->get('clase');

        $tours->save();
        session()->flash('status', 'Tour creado exitosamente!');
        return redirect('tours');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tour = Tour::where('slug', $slug)->firstOrFail();
        $tours = Tour::where('id', '!=', $tour->id)->orderBy('dias')->get();
        $blogs = Djmblog::with('categorias')->latest('created_at')->take(4)->get();
        return view('tours.show', compact('tour', 'tours', 'blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::find($id);
        return view('tours.edit')->with('tour', $tour);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $existingTour = Tour::where('nombre', $request->get('nombre'))->where('id', '!=', $id)->first();
        if ($existingTour) {
            session()->flash('error', 'El título ingresado ya existe. Por favor, elige otro.');
            return redirect()->back()->withInput();
        }
        $tour = Tour::findOrFail($id);
        $tour->nombre = $request->get('nombre');
        $tour->descripcion = $request->get('descripcion');
        $tour->contenido = $request->get('contenido');
        $tour->resumen = $request->get('resumen');
        $tour->detallado = $request->get('detallado');
        $tour->incluidos = $request->get('incluidos');
        $tour->importante = $request->get('importante');
        $tour->generales = $request->get('generales');
        $tour->precio = $request->get('precio');
        $tour->dias = $request->get('dias');
        $tour->ubicacion = $request->get('ubicacion');

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $rutaImg = public_path("img/buscador/");
            $imgTour = $img->getClientOriginalName();
            $img->move($rutaImg, $imgTour);
            $tour->img = $imgTour;
        }

        if ($request->hasFile('mapa')) {
            $rutaMapa = public_path("img/buscador/");
            $mapa = $request->file('mapa');
            $mapaTour = $mapa->getClientOriginalName();
            $mapa->move($rutaMapa, $mapaTour);
            $tour->mapa = $mapaTour;
        }

        $cat = $request->get('categoria');
        $tour->categoria = implode(',', $cat);
        $tour->keywords = $request->get('keywords');
        $tour->slug = $request->get('slug');
        $tour->clase = $request->get('clase');

        $tour->save();

        session()->flash('status', 'Tour actualizado exitosamente!');
        return redirect('tours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Tour::find($id);
        $tour->delete();
        session()->flash('status', 'Tour borrado exitosamente!');
        return redirect('tours');
    }
}