<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExchangeRateRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\ExchangeRate;

class ExchangeRateController extends Controller
{
 //
     //
     public function index()
     {
         $exchange_rate = ExchangeRate::all();
         return view('exchange_rate.index', ['exchange_rate' => $exchange_rate]);
     }

     public function show(){
         if(Auth::check()){
             return redirect('/exchange_rate');
         }

         return view('auth.register');
     }

     public function create()
     {
         return view('exchange_rate.create')->with('success', 'Cuenta Creado.');
     }

     public function store(Request $request)
     {
         //
         $request->validate([
             'name' => 'required|max:255',
             'value' => 'required|max:255'
         ]);

         $exchange_rate = new ExchangeRate();
         $exchange_rate->name = $request->input('name');
         $exchange_rate->value = $request->input('value');
         $exchange_rate->save();

         return view("exchange_rate.message", ['msg' => 'Registro guardado.']);

     }

     public function edit($id)
     {
         $exchange_rate = ExchangeRate::find($id);
         return view('exchange_rate.edit', ['exchange_rate' => $exchange_rate]);
     }

     public function update(Request $request, $id)
     {
         $request->validate([
             'name' => 'required|max:255',
             'value' => 'required|max:255',
         ]);

         $exchange_rate = ExchangeRate::find($id);
         $exchange_rate->name = $request->input('name');
         $exchange_rate->value = $request->input('value');
         $exchange_rate->save();

         return view("exchange_rate.message", ['msg' => 'Registro editado.']);

     }


     public function destroy($id)
     {
         $exchange_rate = ExchangeRate::find($id);
         $exchange_rate->delete();
         return redirect ("exchange_rate");
     }
}
