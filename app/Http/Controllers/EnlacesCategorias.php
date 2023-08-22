<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class EnlacesCategorias extends Controller
{
    public function machu()
    {
        $tours = Tour::all();
        return view('tours.machu-picchu', compact('tours'));
    }
    public function peru()
    {
        $tours = Tour::all();
        return view('tours.pacotes-peru', compact('tours'));
    }
    public function trilhas()
    {
        $tours = Tour::all();
        return view('tours.trilha-inca', compact('tours'));
    }
    public function alternativas()
    {
        $tours = Tour::all();
        return view('tours.rotas-alternativas', compact('tours'));
    }
    public function nosotros()
    {
        $tours = Tour::all();
        return view('nosotros', compact('tours'));
    }
    public function contato()
    {
        $tours = Tour::all();
        return view('tours.contato', compact('tours'));
    }
    public function reserva()
    {
        $tours = Tour::all();
        return view('tours.reserva', compact('tours'));
    }
    public function condicoes()
    {
        $tours = Tour::all();
        return view('condicoes-gerais', compact('tours'));
    }
}