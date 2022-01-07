<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContatoRequest;
use App\Http\Requests\UpdateContatoRequest;
use App\Models\Contato;

class ContatoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index($menu)
    {
      if (isset($menu))
      {
        switch($menu)
        {
          case 1: return view('novo'); break;
          case 2: return view('edita'); break;
          case 3: return view('apaga'); break;
        }
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContatoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public static function store(StoreContatoRequest $request)
    {
      // Definição das regras
      $rules = [
        'nome' => 'required|min:3',
        'numero' => 'required|min:3',
      ];

      // Validação da Request   
      $request->validate($rules);

      $nome = $request->get("nome");
      $numero = $request->get("numero");

      $contato = \App\Models\Contato::create([
        'nome'         => $nome,
        'numero' => $numero]);

      return view('novo', compact('contato'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public static function show()
    {
      $contatos = \App\Models\Contato::get();

      return view('agenda', compact('contatos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contato $contato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContatoRequest  $request
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContatoRequest $request, Contato $contato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contato $contato)
    {
        //
    }
}
