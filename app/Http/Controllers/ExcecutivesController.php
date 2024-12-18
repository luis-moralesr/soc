<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Executive;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ExcecutivesController extends Controller
{
    public function index()
    {

        $executives = Executive::all();

        return view('executives' , compact('executives'));
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'lastName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company' => 'required',
            'state' => 'required',
        ]);

        // Crear el curso con la imagen
        Executive::create([
            'name' => $validatedData['name'],
            'lastName' => $validatedData['lastName'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'company' => $validatedData['company'],
            'state' => $validatedData['state'],
        ]);


        User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make('asesores'),
            ]);


        return redirect()->route('executives.index')->with('success', 'Ejecutivo creado exitosamente.');
    }


}

