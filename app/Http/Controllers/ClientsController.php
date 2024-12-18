<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Executive;

class ClientsController extends Controller
{
    public function index()
    {


        $user_rol  = Auth::user()->rol;

        if ($user_rol == 'executive') {
            $user_email = Auth::user()->email;
            $executive = Executive::where('email', $user_email)->first();
            $executive_id = $executive->id;
            $clients = Client::where('executive_id', $executive_id)->get();
            return view('clients', compact('clients'));
        } else {

            $clients = Client::all();
            return view('clients', compact('clients'));
        }

        // dd($user_rol);

        $clients = Client::where('executive_id', $executive_id)->get();

        return view('clients', compact('clients'));
    }



    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'lastName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'curp' => 'required',
            'address' => 'required',
            'age' => 'required',
        ]);

        $user_email = Auth::user()->email;
        $executive = Executive::where('email', $user_email)->first();
        $executive_id = $executive->id;

        Client::create([
            'name' => $validatedData['name'],
            'lastName' => $validatedData['lastName'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'curp' => $validatedData['curp'],
            'address' => $validatedData['address'],
            'age' => $validatedData['age'],
            'executive_id' => $executive_id,
        ]);


        return redirect()->route('clients.index')->with('success', 'Cliente creado exitosamente.');
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'lastName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'curp' => [
                'required',
                'regex:/^[A-Z]{4}\d{6}[HM](?:AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[A-Z\d]\d$/'
            ],
            'address' => 'required',
            'age' => 'required',
            'status' => 'required',
        ]);

        $client->update($validatedData);

        return redirect()->route('clients.index')->with('success', 'Cliente actualizado exitosamente.');
    }


}
