<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Pedido;
use Illuminate\Support\Facades\Auth;
use App\Models\Executive;

class RequestsController extends Controller
{
    public function index()
    {

        $clients = Client::all();
        $requests = Pedido::all();

        return view('requests', compact('clients', 'requests'));
    }


public function store(Request $request)
{

    $validatedData = $request->validate([
        'client_id' => 'required',
        'product' => 'required',
        'price' => 'required',
        'amount' => 'required',
        'product' => 'required',
        'discount' => 'required',

    ]);


   $price = $validatedData['price'];
   $amount = $validatedData['amount'];
   $discount = $validatedData['discount'];


   $subtotal = $price * $amount;
   $discountAmount = ($discount / 100) * $subtotal;
   $total = $subtotal - $discountAmount;


   $user_email = Auth::user()->email;
   $executive = Executive::where('email', $user_email)->first();
   $executive_id = $executive->id;

   Pedido::create([
       'client_id'       => $validatedData['client_id'],
       'executive_id' => $executive_id,
       'product'      => $validatedData['product'],
       'price'        => $price,
       'amount'       => $amount,
       'total'        => $total,
   ]);

    return redirect()->route('requests.index')->with('success', 'Pedido creado exitosamente.');
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'client_id' => 'required',
        'product' => 'required',
        'price' => 'required',
        'amount' => 'required',
        'discount' => 'required',
        'status' => 'required',
    ]);

    $price = $validatedData['price'];
    $amount = $validatedData['amount'];
    $discount = $validatedData['discount'];

    $subtotal = $price * $amount;
    $discountAmount = ($discount / 100) * $subtotal;
    $total = $subtotal - $discountAmount;

    $user_email = Auth::user()->email;
    $executive = Executive::where('email', $user_email)->first();
    $executive_id = $executive->id;

    $pedido = Pedido::findOrFail($id);
    $pedido->update([
        'client_id'    => $validatedData['client_id'],
        'executive_id' => $executive_id,
        'product' => $validatedData['product'],
        'price' => $price,
        'amount' => $amount,
        'total' => $total,
        'status' => $validatedData['status'],

    ]);

    return redirect()->route('requests.index')->with('success', 'Pedido actualizado exitosamente.');
}


}
