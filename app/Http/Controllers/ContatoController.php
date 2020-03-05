<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function create() {
        $topics = \App\Topico::all();

        return view('contato', compact('topics'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'topic_id' => 'required',
            'message' => 'required|string',
        ], [
            'required' => 'Esse campo é obrigatório',
            'email' => 'Deve ser inserido um e-mail válido',
        ]);

        $dados = $request->all();

        $contato = new \App\Contato();
        $contato->name = $dados['name'];
        $contato->email = $dados['email'];
        $contato->topic_id = $dados['topic_id'];
        $contato->message = $dados['message'];

        $contato->save();

        return back()->with('success','Sua mensagem foi enviada com sucesso! Iremos retornar conforme demanda.');;
    }
}
