<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function generate() {
        return View('generate');
    }

    public function remove() {
        //TODO: implementar a ação de remoção do registro do banco de dados
    }

    public function list() {
        return View('list');
    }
}
