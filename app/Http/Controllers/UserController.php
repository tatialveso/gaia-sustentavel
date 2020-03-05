<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UF;


class UserController extends Controller {

    private $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    function index() {
        $user = Auth::user();
        $ufs = UF::all();

        foreach ($ufs as $key=>$uf) {
            if ($uf['id'] == $user['uf_id']) {
                $userStoredUF = $uf;
                $ufIndex = $key;
            }
        }

        if (isset ($ufIndex)) {
            unset($ufs[$ufIndex]);
        }

        return view( 'configuracoes', [
            'user' => $user,
            'ufs' => $ufs,
            'userStoredUF' => isset($userStoredUF) ? $userStoredUF : null,
        ] );
    }
    
    public function update(Request $request) {
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
