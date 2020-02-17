<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller {
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id) {
        $ufs = \App\UF::all();
        $user = \App\User::find($id);

        return view('configuracoes', compact('ufs', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $data = $request->all();

        $user = \App\User::find($id);
        $user = $data['name'];
        $user = $data['email'];
        $user = Hash::make($data['password']);
        $user = $data['date_of_birth'];
        $user = $data['cpf'];
        $user = $data['address'];
        $user = $data['number'];
        $user = $data['complement'];
        $user = $data['ufs_id'];
        $user = $data['neighbourhood'];
        $user = $data['city'];
        $user = $data['cep'];

        $user->save();

        return back();
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
}
