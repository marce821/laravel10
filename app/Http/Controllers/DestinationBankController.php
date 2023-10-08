<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DestinationBankRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\DestinationBank;

class DestinationBankController extends Controller
{
    //
     //
     public function index()
     {
         $destination_bank = DestinationBank::all();
         return view('destination_bank.index', ['destination_bank' => $destination_bank]);
     }

     public function show(){
         if(Auth::check()){
             return redirect('/destination_bank');
         }

         return view('auth.register');
     }

     public function create()
     {
         return view('destination_bank.create')->with('success', 'Cuenta Creado.');
     }

     public function store(Request $request)
     {
         //
         $request->validate([
             'name' => 'required|max:255'
         ]);

         $destination_bank = new DestinationBank();
         $destination_bank->name = $request->input('name');
         $destination_bank->save();

         return view("destination_bank.message", ['msg' => 'Registro guardado.']);

     }

     public function edit($id)
     {
         $destination_bank = DestinationBank::find($id);
         return view('destination_bank.edit', ['destination_bank' => $destination_bank]);
     }

     public function update(Request $request, $id)
     {
         $request->validate([
             'name' => 'required|max:255',
         ]);

         $destination_bank = DestinationBank::find($id);
         $destination_bank->name = $request->input('name');
         $destination_bank->save();

         return view("destination_bank.message", ['msg' => 'Registro editado.']);

     }


     public function destroy($id)
     {
         $destination_bank = DestinationBank::find($id);
         $destination_bank->delete();
         return redirect ("destination_bank");
     }
}
