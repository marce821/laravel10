<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ResponsibleRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Responsible;

class ResponsibleController extends Controller
{

    public function index()
    {
        $responsible = Responsible::all();
        return view('responsible.index', ['responsible' => $responsible]);
    }

    public function show(){
        if(Auth::check()){
            return redirect('/responsible');
        }

        return view('auth.register');
    }

    /*public function create(ResponsibleRequest $request){

        $responsible = Responsible::create($request->validated());
        return redirect('/responsible')->with('success', 'Responsable Creado.');
    }*/

    public function create()
    {
        //$niveles = Nivel::all();
        //return view('alumnos.create', ['niveles' => $niveles]);
        return view('responsible.create')->with('success', 'Responsable Creado.');
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'num_doc' => 'nullable',
            'name' => 'required|max:255',
            'nota' => 'nullable|'
        ]);

        $responsible = new Responsible();
        $responsible->num_doc = $request->input('num_doc'); // corresponde al nombre de los campos en la tabla $alumno->matricula
        $responsible->name = $request->input('name');
        $responsible->nota = $request->input('nota');
        $responsible->save();

        return view("responsible.message", ['msg' => 'Registro guardado.']);

    }


    public function edit($id)
    {
        $responsible = Responsible::find($id);
        return view('responsible.edit', ['responsible' => $responsible]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'num_doc' => 'nullable|max:255',
            'name' => 'required|max:255',
            'nota' => 'nullable|'
        ]);

        $responsible = Responsible::find($id);
        $responsible->num_doc = $request->input('num_doc'); // corresponde al nombre de los campos en la tabla $alumno->matricula
        $responsible->name = $request->input('name');
        $responsible->nota = $request->input('nota');
        $responsible->save();

        return view("responsible.message", ['msg' => 'Registro editado.']);

    }

    public function destroy($id)
    {
        $responsible = Responsible::find($id);
        $responsible->delete();
        return redirect ("/responsible");
    }
}
