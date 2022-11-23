<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
   private array $data;

   private function setFooter($val)
   {
      $this->data['footer'] = $val;
   }

   private function setTitle($val)
   {
      $this->data['title'] = $val;
   }

   public function index()
   {
      $this->setFooter('Entrada');
      $this->setTitle('Bem vindo');
      $this->data['message'] = 'Bem vindo';
      $this->data['css'] = 'welcome.css';
      $this->data['html'] = '<p style="color: red">Olá</p>';
      return \view('/templates/header', $this->data) . \view('welcome', $this->data) . \view('/templates/footer', $this->data);
   }

   public function about()
   {
      $this->setFooter('Info');
      $this->setTitle('Sobre');
      $this->data['message'] = 'Sobre nós!';
      $this->data['css'] = 'about.css';
      return \view('/templates/header', $this->data) . \view('about', $this->data) . \view('/templates/footer', $this->data);
   }

   public function logOut()
   {
      $this->setFooter('Saída');
      $this->setTitle('Log out');
      $this->data['message'] = 'Have a nice day!';
      $this->data['css'] = 'logout.css';
      return \view('/templates/header', $this->data) . \view('logout', $this->data) . \view('/templates/footer', $this->data);
   }

   public function users(Request $r)
   {
      $this->setFooter('Usuários');
      $this->setTitle('Usuários');
      $this->data['message'] = 'Have a nice day!';
      $this->data['css'] = 'users.css';
      $this->data['value'] = $r->qte;
      return \view('/templates/header', $this->data) . \view('users', $this->data) . \view('/templates/footer', $this->data);
   }

   public function comp()
   {
      $this->setFooter('Componentes');
      $this->setTitle('Componentes');
      $this->data['message'] = 'Receita de Bolo!';
      $this->data['css'] = 'components.css';
      $this->data['data'] = ['Farinha', 'Ovos', 'Água', 'Côco ralado', 'Açúcar'];
      return \view('/templates/header', $this->data) . \view('component', $this->data) . \view('/templates/footer', $this->data);
   }

   public function exercicio1() {
   $pessoas = [
      [ 
         'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),  
         'nome' => 'Alessandro', 
         'birth' => '29/01/90', 
         'idade' => 29],
      [ 
         'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
         'nome' => 'Bonieky', 
         'birth' => '10/11/1933', 
         'idade' => 90],
      [ 
         'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
         'nome' => 'Maria', 
         'birth' => '01/01/2020', 
         'idade' => 2
      ]
   ];
      $this->setFooter('Exercício 1');
      $this->setTitle('Exercício 1');
      $this->data['css'] = 'ex1.css';

      $dados['pessoas'] = $pessoas;
      return \view('/templates/header', $this->data) . \view('exercicio1', $dados) . \view('/templates/footer', $this->data);
   }

   public function exercicio2(Request $r) { 
      $this->setFooter('Exercício 1');
      $this->setTitle('Exercício 1');
      $this->data['css'] = 'ex2.css';
      $url = 'https://i.pravatar.cc/150?img=';
      $dados['url'] = $url;
      $dados['qte'] = $r->qte;
      return \view('/templates/header', $this->data) . \view('exercicio2', $dados) . \view('/templates/footer', $this->data);
   }

   public function include()
   {
      $this->setFooter('Include');
      $this->setTitle('Include');
      $this->data['css'] = '';
      return \view('/templates/header', $this->data) . \view('include', $this->data) . \view('/templates/footer', $this->data);
   }
}
