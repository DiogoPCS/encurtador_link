<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function register() {
        return View('site.register');
    }

    public function recover() {
        return View('recover');
    }

    public function login() {
        return View('login');
    }

    public function logout() {
        //TODO: implementar código para logout da session do usuário
    }
}
