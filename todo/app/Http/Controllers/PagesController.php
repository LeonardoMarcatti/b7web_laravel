<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    private array $data;

    public function index()
    {
        $this->data['tab'] = 'ToDo - Home';
        return \view('home', $this->data);
    }

    public function login()
    {
        $this->data['tab'] = 'ToDo - Login';
        $this->data['message'] = 'Login aqui';
        return \view('login', $this->data);
    }
}
