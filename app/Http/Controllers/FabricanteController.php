<?php

namespace App\Http\Controllers;

use App\Models\Fabricante;
use Illuminate\Http\Request;

class FabricanteController extends Controller
{

    public function index()
    {
        $fabricantes = \App\Models\Fabricante::all();
        //$fabricantes = auth()->user()->fabricantes;
        return view('fabricante.index', compact('fabricantes'));
    }

    public function create()
    {
        return view('fabricante.form');
    }

    public function store(Request $request)
    {
        //auth()->user()->pessoas()->create($request->all());
        \App\Models\Fabricante::create($request->all());
        return redirect('/fabricantes');
    }

    public function show(Fabricante $fabricante)
    {
        return view('fabricante.show', compact('fabricante'));
    }

    public function edit(Fabricante $fabricante)
    {
        return view('fabricante.form', compact('fabricante'));
    }

    public function update(Request $request, Fabricante $fabricante)
    {
        $fabricante->update($request->all());

        return redirect('/fabricantes');
    }

    public function destroy(Fabricante $fabricante)
    {
        $fabricante->delete();

        return redirect('/fabricantes');
    }
}
