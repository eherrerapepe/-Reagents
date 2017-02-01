<?php

namespace App\Http\Controllers;

use App\Reagent;
use App\Subject;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

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
    //Metodo que obtiene los reactivos y envia en formato json
    public function getReagents()
    {
        //Definimos un array para almacenar los datos que retornaremos
        $data = array();

        $idUser = Auth::user()->id;
        //Consultamos las materias registradas por el usuario
        $dataSubjects = Subject::where('user_id',$idUser)->where('state',true)->get();
        //Consultamos la cantidad de reactivos que tiene cada materia
        foreach ($dataSubjects as $dataSubject) {
            $countReagent = Reagent::where('subject_id','=',$dataSubject->id)->count();
            //Consultamos todas las preguntas que tengan una observacion de rectificación
            $data[] = [
                "id" => $dataSubject->id,
                "subject" => $dataSubject->subject,
                "reagents" => $countReagent,
                "observations" => 38
            ];
        }
        //Retornamos los datos a la vista en formato json
        return json_encode($data);
    }
    //Método que retorna la vista con el id de la asignatura
    public function postReagents(Request $request)
    {
        $idSubject = $request->id_subject;
        //Retornamos la vista donde enviamos el id de la materia
        return view('partials.reagents.questions_create', compact('idSubject'));
    }
}
