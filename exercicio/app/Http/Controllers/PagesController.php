<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    private array $data;

  public function index()
  {
    return \view('welcome');
  }

  public function exercicio1()
  {
    $pessoas = [
      [ 
        'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),  
        'nome' => 'Alessandro', 
        'birth' => '1990-01-29', 
        'idade' => 29
      ],
      [ 
        'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
        'nome' => 'Bonieky', 
        'birth' => '1932-11-10', 
        'idade' => 90
      ],

      [ 
        'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
        'nome' => 'Maria', 
        'birth' => '2000-01-01', 
        'idade' => 28
      ]
    ];

    $this->data['people'] = $pessoas;
    $this->data['title'] = 'Exercício 1';
    $this->data['header'] = 'Exercício 1';
    $this->data['footer'] = 'Exercício 1';
    $this->data['css'] = 'ex1.css';
    return \view('templates/header', $this->data) . \view('ex1', $this->data) . \view('templates/footer', $this->data);
  }

  public function exercicio2(Request $r)
  {
    $this->data['url'] = 'https://i.pravatar.cc/150?img=';
    $this->data['title'] = 'Exercício 2';
    $this->data['header'] = 'Exercício 2';
    $this->data['footer'] = 'Exercício 2';
    $this->data['css'] = 'ex2.css';
    $this->data['qte'] = $r->qte;
    return \view('templates/header', $this->data) . \view('ex2', $this->data) . \view('templates/footer', $this->data);
  }
}
