<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SubjectController extends Controller
{
    //Metodo que muestra las asignaturas creadas con un buscador y opciones de CRUD
    public function index()
    {
        return view('subject');
    }
}
