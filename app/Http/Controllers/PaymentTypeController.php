<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PaymentTypeRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\PaymentType;

class PaymentTypeController extends Controller
{
    //
    public function index()
    {
        $payment_type = PaymentType::all();
        return view('payment_type.index', ['payment_type' => $payment_type]);
    }

    public function show(){
        if(Auth::check()){
            return redirect('/payment_type');
        }

        return view('auth.register');
    }

    public function create()
    {
        //$niveles = Nivel::all();
        //return view('alumnos.create', ['niveles' => $niveles]);
        return view('payment_type.create')->with('success', 'Cuenta Creado.');
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|max:255'
        ]);

        $payment_type = new PaymentType();
        $payment_type->name = $request->input('name');
        $payment_type->save();

        return view("payment_type.message", ['msg' => 'Registro guardado.']);

    }

    public function edit($id)
    {
        $payment_type = PaymentType::find($id);
        return view('payment_type.edit', ['payment_type' => $payment_type]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $payment_type = PaymentType::find($id);
        $payment_type->name = $request->input('name');
        $payment_type->save();

        return view("payment_type.message", ['msg' => 'Registro editado.']);

    }


    public function destroy($id)
    {
        $payment_type = PaymentType::find($id);
        $payment_type->delete();
        return redirect ("payment_type");
    }
}
