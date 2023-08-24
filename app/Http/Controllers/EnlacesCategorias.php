<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class EnlacesCategorias extends Controller
{
    public function machu()
    {
        return view('tours.machu-picchu');
    }
    public function peru()
    {
        return view('tours.pacotes-peru');
    }
    public function trilhas()
    {
        return view('tours.trilha-inca');
    }
    public function alternativas()
    {
        return view('tours.rotas-alternativas');
    }
    public function nosotros()
    {
        return view('nosotros');
    }
    public function contato()
    {
        return view('tours.contato');
    }
    public function reserva()
    {
        return view('tours.reserva');
    }
    public function condicoes()
    {
        return view('condicoes-gerais');
    }
}