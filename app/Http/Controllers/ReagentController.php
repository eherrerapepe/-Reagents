<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReagentController extends Controller
{
    //Metodo que muestra los reactivos creados con un buscador y opciones de CRUD
    public function index()
    {
        return view('reagents');
    }
    //Metodo que muestra el formulario de registro de un nuevo reactivo
    public function create()
    {
        return view('partials.reagents.reagents_create');
    }
}
