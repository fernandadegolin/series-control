<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index (Request $request)
    {
        $series = [
            'Oi sua fera no laravel',
            'Me sinto insegura com php',
            'Estou me desafiando',
            'bla bla bla'
        ];

        return view ('series.index', compact ('series'));
    }
}
