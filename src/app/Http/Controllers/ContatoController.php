<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContatoRequest;
use App\Http\Requests\UpdateContatoRequest;
use App\Models\Contato;

class ContatoController extends Controller
{
    
    
    public static function index($menu)
    {
      //
    }

    /* TELA PRINCIPAL COM TODOS OS CONTATOS */
    public function show()
    {
      //busca todos os contatos
      $contatos = \App\Models\Contato::get();
      
      //manda todos os contatos para a view principal
      return view('agenda', compact('contatos'));
    }


    /* CHAMA VIEW PARA NOVO CONTATO */
    public function create()
    {
      return view('novo');
    }


    /* SALVA NOVO CONTATO */
    public function store(StoreContatoRequest $request)
    {
      //pega os dados do requerimento
      $nome = $request->get("nome");
      $numero = $request->get("numero");

      //usa esses dados para criar contato
      $contato = \App\Models\Contato::create([
        'nome'         => $nome,
        'numero' => $numero]);

      //chama view denovo para mostrar que salvou mesmo
      return view('novo', compact('contato'));
    }


    /* CHAMA VIEW PARA MUDAR CONTATO */
    public function edit()
    {
      return view('edita');
    }
    

    /* SALVA EDIÇÕES NO CONTATO */
    public function update(UpdateContatoRequest $request)
    {
      //pega os dados do requerimento
      $nome = $request->get("nome");
      $novonome = $request->get("novonome");
      $novonumero = $request->get("novonumero");

      //usa $nome para buscar um contato
      $contato = \App\Models\Contato::where('nome', '=', $nome)->first();

      //se não encontrar esse contato, retornar um erro
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


    /* CHAMA VIEW PARA APAGAR CONTATO */
    public function delete()
    {
      return view('apaga');
    }

    /* APAGA CONTATO */
    public function destroy(StoreContatoRequest $request)
    {
      //pega os dados do requerimento
      $nome = $request->get("nome");

      //usa $nome para buscar um contato
      $contato = \App\Models\Contato::where('nome', '=', $nome)->first();

      //apaga contato
      $contato->delete();

      //chama a view denovo para mostrar as edições feitas
      return view('apaga', compact('contato'));
    }
}
