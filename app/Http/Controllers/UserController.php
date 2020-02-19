<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\UF;


class UserController extends Controller {

    private $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    function index() {
        $user = Auth::user();
        $ufs = UF::all();

        // pegar UF do User (temos somente o uf_id vindo do Auth::user())
        foreach ($ufs as $key=>$uf) {
            if ($uf['id'] == $user['uf_id']) {
                $userStoredUF = $uf;
                $ufIndex = $key;
            }
        }

        // remover item encontrado da lista (para iterarmos sem repetir o encontrado)
        if (isset ($ufIndex)) {
            unset($ufs[$ufIndex]);
        }

        return view( 'configuracoes', [
            'user' => $user,
            'ufs' => $ufs,
            'userStoredUF' => isset($userStoredUF) ? $userStoredUF : null,
        ] );
    }
    
    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Request $request) {
    //     $user = Auth::user();
    //     dd($user);

        
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        //inserir validaçoes
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'cpf' => 'required|string|min:11|max:11',
            'endereco' => 'required|string',
            'numero' => 'required|numeric',
            'uf_id' => 'required',
            'bairro' => 'string|required',
            'cidade' => 'required|string',
            'cep' => 'required|max:8|string',
        ], [
            'required' => 'Esse campo é obrigatório',
            'min' => 'O número mínimo de caracteres é :min',
            'max' => 'O número máximo de caracteres é :max',
        ]);
        
        $data = $request->only([
            'name',
            'data_nascimento',
            'cpf',
            'endereco',
            'numero',
            'complemento',
            'uf_id',
            'bairro',
            'cidade',
            'cep',
        ]);

        $this->updateUser($data , Auth::user()->id);

        return redirect()->route('configuracoes.index')
        ->with('success','Dados atualizados com sucesso.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $user = \App\User::find($id);
        $user->delete();

        return back();
    }

    protected function updateUser(array $data , int $id){
        return User::where('id' , $id)
        ->update([
            'name' => $data['name'],
            'cpf' => $data['cpf'],
            'date_of_birth' => $data['data_nascimento'],
            //'phone' => $data['phone'],
            'address' => $data['endereco'],
            'number' => $data['numero'],
            'complement' => $data['complemento'],
            'neighbourhood' => $data['bairro'],
            'city' => $data['cidade'],
            'uf_id' => $data['uf_id'],
            'cep' => $data['cep'],
        ]);
    }
}
