<?php

namespace App\Http\Controllers;

use App\Comida;
use Illuminate\Http\Request;
use Session;

class ComidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comidas = Comida::paginate(3);
        return view('comidas.visualizar', compact('comidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comidas.cadastra');
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
          'descricao' => 'required',
        ]);

        Comida::create($request->all());

        Session::flash('message', 'Comida cadastrada com sucesso!');
        return redirect()->route('comidas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function show(Comida $comida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function edit(Comida $comida)
    {
        return view('comidas.edita', compact('comida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comida $comida)
    {
      $request->validate([
        'nome' => 'required',
        'descricao' => 'required',
      ]);

      $comida->update($request->all());

      Session::flash('message', 'Comida atualizada com sucesso!');
      return redirect()->route('comidas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comida $comida)
    {
        $comida->delete();
        Session::flash('message', 'Comida excluída com sucesso!');
        return redirect()->route('comidas.index');
    }
}
