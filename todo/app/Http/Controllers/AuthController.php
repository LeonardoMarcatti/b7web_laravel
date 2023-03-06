<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    private array $data;

    public function index(Request $r)
    {
        $this->data['tab'] = 'ToDo - Login';
        $this->data['message'] = 'Login aqui';
        return \view('login', $this->data);
    }

    public function logup(Request $r)
    {
        $this->data['tab'] = 'ToDo - Logup';
        $this->data['message'] = 'Formulário de Logup';
        return view('logup', $this->data);
    }
}
