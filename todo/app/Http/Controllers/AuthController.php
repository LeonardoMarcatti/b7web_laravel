<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private array $data;
    private object $model;

    public function index()
    {
        if (Auth::check()) {
            return \redirect(route('home'));
        }
        $this->data['tab'] = 'ToDo - Login';
        $this->data['links'] = false;
        return \view('login', $this->data);
    }

    public function loginAction(Request $r)
    {
        $valid = $r->validate(['email' => 'required|email', 'password' => 'required|min:6'], ['email.required' => 'O campo de email é obrigatório', 'email.email' => 'O campo deve ser um email válido.', 'password.required' => 'A senha é obrigatória','password.min' => 'Senha fraca']);

        if (Auth::attempt($valid)) {
            return \redirect(route('home'));
        }

        return \redirect(route('login'));
    }

    public function logup()
    {
        if (Auth::check()) {
            return \redirect(route('home'));
        }
        $this->data['tab'] = 'ToDo - Logup';
        $this->data['authUser'] = null;
        $this->data['links'] = 'logup';
        return view('logup', $this->data);
    }

    public function logupAction(Request $r)
    {
        $r->validate(['name' => 'required', 'email' => 'required|email|unique:users', 'password' => 'required|min:6|confirmed'], ['name.required' => 'O campo é obrigatório', 'email.required' => 'O campo é obrigatório', 'email.email' => 'Insira um email válido', 'email.unique' => 'Email existente', 'password.required' => 'O campo é obrigatório', 'password.min' => 'A senha deve ter pelo menos 6 dígitos', 'password.confirmed' => 'As senhas devem ser iguais']);
        $data = $r->all();
        $data['password'] = Hash::make($data['password']);
        $this->model = new User();
        $creted = $this->model->createUser($data);
        if ($creted != null) {
            return \redirect(route('home'));
        }
    }

    public function logout()
    {
        Auth::logout();
        return \redirect(route('login'));
    }
}