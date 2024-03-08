<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
      $name = 'Leonardo';
      $lastName = 'Marcatti da Silva';
      $birthday = '14/10/78';
      $age = 90;
      $data = ['name' => $name, 'age' => $age, 'lastName' => $lastName, 'birthday' => $birthday];
      return view('welcome', $data);
    }

    public function logout()
    {
      return view('logout');
    }

    public function users(Request $r)
    {
      $data = ['number' => $r->number];
      return view('users', $data);
    }

    public function blade()
    {
      $ingredients = ['ovo', 'farinha', 'água', 'açúcar', 'massa'];
      $data = ['title' => 'Blade', 'subTitle' => 'Página do Blade', 'html' => "<b style=\"color: red\">Negrito</b>", 'ingredients' => $ingredients];
      return view('blade', $data);
    }

    public function include()
    {
      return view('include');
    }

    public function components()
    {
      return view('components');
    }

    public function layout()
    {
      return view('site');
    }

    public function layout2()
    {
      return view('site2');
    }
}
