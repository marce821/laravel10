<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PurchaseRateRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\PurchaseRate;

class PurchaseRateController extends Controller
{
    //
     //
     public function index()
     {
         $purchase_rate = PurchaseRate::all();
         return view('purchase_rate.index', ['purchase_rate' => $purchase_rate]);
     }

     public function show(){
         if(Auth::check()){
             return redirect('/purchase_rate');
         }

         return view('auth.register');
     }

     public function create()
     {
         //$niveles = Nivel::all();
         //return view('alumnos.create', ['niveles' => $niveles]);
         return view('purchase_rate.create')->with('success', 'Cuenta Creado.');
     }

     public function store(Request $request)
     {
         //
         $request->validate([
             'value' => 'required|max:255'
         ]);

         $purchase_rate = new PurchaseRate();
         $purchase_rate->value = $request->input('value');
         $purchase_rate->save();

         return view("purchase_rate.message", ['msg' => 'Registro guardado.']);

     }

     public function edit($id)
     {
         $purchase_rate = PurchaseRate::find($id);
         return view('purchase_rate.edit', ['purchase_rate' => $purchase_rate]);
     }

     public function update(Request $request, $id)
     {
         $request->validate([
             'value' => 'required|max:255',
         ]);

         $purchase_rate = PurchaseRate::find($id);
         $purchase_rate->value = $request->input('value');
         $purchase_rate->save();

         return view("purchase_rate.message", ['msg' => 'Registro editado.']);

     }


     public function destroy($id)
     {
         $purchase_rate = PurchaseRate::find($id);
         $purchase_rate->delete();
         return redirect ("purchase_rate");
     }
}
