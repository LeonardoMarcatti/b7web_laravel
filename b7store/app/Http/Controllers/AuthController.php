<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogupRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Models\StatesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    private object $model;
    private array $data;

    public function logup()
    {
        return view('auth.logup');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginAction(LoginRequest $r)
    {
        $loginData = $r->only(['email', 'password']);
        if(Auth::attempt($loginData)){
            $user = Auth::user();
            return \redirect(route('home'));
        }

        return back()->with('message', 'Erro ao fazer o login');
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
        return \redirect(route('selectState'));
    }

    public function selectState()
    {
        $this->model = new StatesModel();
        $this->data['states'] = $this->model->getStates();

        return view('auth.selectState', $this->data);
    }

    public function selectStateAction(Request $r)
    {
        $state = $r->get('state');
        $stateRegister = StatesModel::find($state);

        if (\is_null($stateRegister)) {
            return back();
        }

        $loggeduser = Auth::user();
        $loggeduser->state_id = $state;
        $loggeduser->save();
        return \redirect(route('home'));
    }

    public function logout()
    {
        Auth::logout();
        return \redirect(route('login'));
    }
}
