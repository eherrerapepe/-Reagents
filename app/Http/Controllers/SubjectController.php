<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;

class SubjectController extends Controller
{
    //Metodo que muestra las asignaturas creadas con un buscador y opciones de CRUD
    public function index(Request $request)
    {
        //Retornamos la vista donde visualizamos todos las materias registradas
        return view('subject');
    }

    //Metodo que obtiene todas las materias registradas
    public function getSubjects()
    {
        //DEfinimos el id para la tabla en relacion
        $idUser = Auth::user()->id;
        //Realizamos la consulta de las asignaturas registradas por el usuario
        $subjects = Subject::where('user_id',$idUser)->where('state',true)->get();
        //Enviamos los registros en formato JSON
        return $subjects;
    }

    //Metodo que registra una nueva asignatura
    public function saveNew(Request $request)
    {
        //Obtenemos los datos del formulario
        $dataForm = $request->all();

        //Validamos los datos
        $validator = Validator::make($dataForm, [
            'subject' => 'required|unique:subjects',
            'detail' => 'max:150',
        ]);
        //Retornamos los datos de error si existen
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        //Si no hay error procedemos a haer el registro
        $createSubject = Subject::create($dataForm);
        if ($createSubject)
            $message = "La asignatura $createSubject->subject se creo correctamente.";
        else
            $message = "Error al registrar la asignatura.";

        Session::flash('message',$message);
        //Redirecionamos a la página principal
        return redirect()->route('subjects');
    }
    //Método que elimina la materia con los accesos a los reactivos
    public function deleteSubject(Request $request)
    {
        //Obtenemos el id de la materia
        $idSubject = $request->id_subject;
        $subject = Subject::findOrFail($idSubject);
        $updateSubject = $subject->fill(['state'=>$idSubject])->save();
        if ($updateSubject)
            $message = "La asignatura $subject->subject se elimino correctamente.";
        else
            $message = "Error al eliminar la asignatura.";

        Session::flash('message', $message);

        return redirect()->back();
    }
}
