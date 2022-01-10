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
          case 3: return view('apaga'); break;
        }
      }
    }

    /* CHAMA VIEW PARA DIGITAR DADOS DO NOVO CONTATO */
    public static function create()
    {
      return view('novo');
    }

    /* SALVA DADOS DO NOVO CONTATO */
    public static function store(StoreContatoRequest $request)
    {
      // Definição das regras
      $rules = [
        'nome' => 'required|min:1',
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

    /* CHAMA VIEW PARA DIGITAR DADOS PARA MUDAR CONTATO */
    public static function edit()
    {
      return view('edita');
    }
    
    /* INSERE OS DADOS DIGITADOS NO CONTATO */
    public static function update(UpdateContatoRequest $request)
    {
      // Definição das regras
      $rules = [
        'nome' => 'required|min:3',
        'numero' => 'required|min:3',
      ];

      // Validação da Request   
      // $request->validate($rules);

      //pega os dados do requerimento
      $nome = $request->get("nome");
      $novonome = $request->get("novonome");
      $novonumero = $request->get("novonumero");

      //usa $nome para buscar um contato
      $contato = \App\Models\Contato::where('nome', '=', $nome)->first();

      if($contato == null)
      {
        $erro = "Contato não encontrado";
        return view('edita', compact('erro'));
      }

      //usa $novonome e $novonumero para editar o contato
      $contato->nome = $novonome;
      $contato->numero = $novonumero;

      //salva as alterações no contato
      $contato->save();

      //chama a view denovo para mostrar as edições feitas
      return view('edita', compact('contato'));
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
