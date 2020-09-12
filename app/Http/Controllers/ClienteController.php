<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes = \App\Models\Cliente::all();

        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('cliente.form');
    }


    public function store(Request $request)
    {

        \App\Models\Cliente::create($request->all());
        return redirect('/clientes');
    }


    public function show(Cliente $cliente)
    {
        return view('cliente.show', compact('cliente'));
    }


    public function edit(Cliente $cliente)
    {
        return view('cliente.form', compact('cliente'));
    }


    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return redirect('/clientes');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect('/clientes');
    }
}
