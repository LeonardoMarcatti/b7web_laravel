<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private array $data;

    public function index(Request $r)
    {
        $this->data['tab'] = 'ToDo - Home';
        return \view('home', $this->data);
    }
}
