<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Filme::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'sinopse' => 'required',
            'data_lancamento' => 'required',
            'nota' => 'required',
            'maior_18' => 'required',
        ]);
        return Filme::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Filme::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filme = Filme::find($id);
        $filme->generos()->attach($request->get('id_genero'));
        $filme->update($request->all());

        return $filme;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Filme::destroy($id);
    }

    /**
     * Busca por um nome
     *
     * @param  int  $nome
     * @return \Illuminate\Http\Response
     */
    public function search($nome)
    {
        return Filme::where('nome', 'like', '%' . $nome . '%')->get();
    }
}
