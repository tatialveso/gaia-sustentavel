<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SegurancaController extends Controller
{
    function index(Request $request) {
        return view('seguranca', [
            'user' => Auth::user(),
        ]);
    }

    public function updatePassword(Request $request) {
        $this->validate($request, [
            'newpassword' => 'required|min:8|confirmed',
            'newpassword_confirmation' => 'required|min:8',
        ],[
            'required' => 'Esse campo é obrigatório',
            'min' => 'O número mínimo de caracteres é :min',
            'confirmed' => 'As senhas não são iguais'
        ]);

        $data = $request->only([
            'newpassword',
        ]);

        Auth::user()->update([
            'password' => Hash::make($data['newpassword']),
        ]);

        return redirect()->route('seguranca.index')
        ->with('success','Senha atualizada com sucesso.');
    }
}
