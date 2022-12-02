<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Tag\H1;
use Mpdf\Tag\P;

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
    $this->data['qte'] =  $r->qte;
    return \view('templates/header', $this->data) . \view('ex2', $this->data) . \view('templates/footer', $this->data);
  }

  public function include()
  {
    /*
    * Neste caso, como temos um HTML sendo passado para view/components devemos não escapar o conteúdo, o que pode ser perigoso. Além disso, a sintaxe é um pouco mais simples quando temos um HTML pequeno. Para HTML mais complexo devemos usar @component mesmo.
    * Includes são melhores para conteúdo estático como header e footer
    */

    $this->data['title'] = 'Include';
    $this->data['header'] = 'Include';
    $this->data['footer'] = 'Include';
    $this->data['css'] = 'ex2.css';
    $this->data['info'] = "<h1>Um título qualquer</h1>";
    return view('includes', $this->data);
  }

  public function include2()
  {
    /*
    * Para HTMLs maiores e mais complexos é melhor usar @component na view e lá escapamos todo o HTML quando enviado.
    */

    $this->data['title'] = 'Include 2';
    $this->data['header'] = 'Include 2';
    $this->data['footer'] = 'Include 2';
    $this->data['css'] = 'ex2.css';
    return view('includes2', $this->data);
  }

  public function includeIf()
  {
    /*
    * Para HTMLs maiores e mais complexos é melhor usar @component na view e lá escapamos todo o HTML quando enviado.
    */

    $this->data['title'] = 'Includeif ';
    $this->data['header'] = 'Includeif';
    $this->data['footer'] = 'Includeif';
    $this->data['css'] = 'ex2.css';
    return view('includeIf', $this->data);
  }

  public function component()
  {
    $this->data['title'] = 'Component Alias';
    $this->data['header'] = 'Component Alias';
    $this->data['footer'] = 'Component Alias';
    $this->data['css'] = 'ex2.css';
    return view('component', $this->data);
  }

  public function layout()
  {
    $this->data['title'] = 'Layout';
    $this->data['header'] = 'Layout';
    $this->data['footer'] = 'Layout';
    $this->data['css'] = 'layout.css';
    return view('site', $this->data);
  }

  public function layout2()
  {
    $this->data['title'] = 'Layout';
    $this->data['header'] = 'Layout';
    $this->data['footer'] = 'Layout';
    $this->data['css'] = 'layout2.css';
    $this->data['message'] = 'Eu sou um conteúdo!';
    return view('site2', $this->data);
  }
}
