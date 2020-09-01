<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = \App\Models\Produto::all();

        return view('produto.index', compact('produtos'));
    }


    public function create()
    {
        return view('produto.form');
    }


    public function store(Request $request)
    {
        \App\Models\Produto::create($request->all());
        return redirect('/produtos');
    }


    public function show(Produto $produto)
    {
        return view('produto.show', compact('produto'));
    }


    public function edit(Produto $produto)
    {
        return view('produto.form', compact('produto'));
    }


    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());
        return redirect('/produtos');
    }


    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect('/produtos');
    }
}
