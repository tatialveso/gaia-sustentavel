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
        return view( 'configuracoes', [
            'user' => $user,
            'ufs' => $ufs
        ] );
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request) {
        $user = Auth::user();
        //dd($user);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        //inserir validaçoes
        
        $data = $request->only([
            'name', 'data_nascimento', 'cpf', 'endereco', 'numero', 'complemento', 'bairro', 'cidade', 'uf_id', 'cep'
        ]);

        $this->updateUser($data , Auth::user()->id);


        return redirect()->route('configuracoes.index');
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
