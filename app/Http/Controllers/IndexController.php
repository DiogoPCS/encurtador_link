<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return View('index');
    }

    public function redirect() {
        //TODO: implementar o header para redirecionamento do usuário
    }
}
