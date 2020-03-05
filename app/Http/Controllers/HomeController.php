<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class HomeController extends Controller
{
    public function index() {
        $produtos = Produto::latest()->take(6)->get();
        
        $registros = Produto::where([
            'active' => 'S'
        ])->take(3)->get();
        return view('index', compact('registros', 'produtos'));
    }

    public function produto($id=null) {
        if(!empty($id)) {
            $registro = Produto::where([
                'id'=> $id,
                'active'=> 'S'
            ])->first();
        }
        if(!empty($registro)) {
            return view('produto', compact($registro));
        }

        return redirect()->route('/');
    }
}