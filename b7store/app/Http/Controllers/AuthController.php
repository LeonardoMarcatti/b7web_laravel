<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function logup()
    {
        return view('auth.logup');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function forgotPassword()
    {
        return view('auth.forgotPassword');
    }

    public function logupAction(LogupRequest $r)
    {
        $userData = $r->only(['name', 'email', 'password']);
        $userData['password'] = Hash::make($r->password);
        $user = User::create($userData);
        Auth::loginUsingId($user->id);
        return \redirect()->route('selectState');
    }

    public function selectState()
    {
        return view('auth.selectState');
    }

    public function selectStateAction(Request $r)
    {
        
        dd($r->all());
    }
}
