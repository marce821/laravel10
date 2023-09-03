<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ResponsibleRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Responsible;

class ResponsibleController extends Controller
{
    public function index(){
        return view('responsible.index');
    }

    public function show(){
        if(Auth::check()){
            return redirect('/responsible');
        }

        return view('auth.register');
    }

    public function create(ResponsibleRequest $request){
        /*if(! Auth::validate($credentials)){
            return redirect()->to('/login')->withErrors('Por favor logearse');
        }*/
        $responsible = Responsible::create($request->validated());
        return redirect('/responsible')->with('success', 'Responsable Creado.');
    }
}
