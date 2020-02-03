<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfiguracoesController extends Controller
{
    function index() {
        return view('configuracoes');
    }
}
