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

    public function index(Request $r)
    {
        if (Auth::check()) {
            return \redirect(route('home'));
        }
        $this->data['tab'] = 'ToDo - Login';
        $this->data['links'] = false;
        return \view('login', $this->data);
    }

    public function logup(Request $r)
    {
        if (Auth::check()) {
            return \redirect(route('home'));
        }
        $this->data['tab'] = 'ToDo - Logup';
        $this->data['authUser'] = null;
        $this->data['links'] = 'login';
        return view('logup', $this->data);
    }

    public function logupAction(Request $r)
    {
        $r->validate(['name' => 'required', 'email' => 'required|email|unique:users', 'password' => 'required|min:6|confirmed']);
        $data = $r->all();
        dd($data);
        $data['password'] = Hash::make($data['password']);
        $this->model = new User();
        $creted = $this->model->createUser($data);
        if ($creted != null) {
            return \redirect(route('home'));
        }
    }

    public function loginAction(Request $r)
    {
        $valid = $r->validate(['email' => 'required|email', 'password' => 'required|min:6']);
        
        if (Auth::attempt($valid)) {
            return \redirect(route('home'));
        }

        return \redirect(route('login'));
    }

    public function logout()
    {
        Auth::logout();
        return \redirect(route('login'));
    }
}