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

   public function include()
   {
      $this->setFooter('Include');
      $this->setTitle('Include');
      $this->data['css'] = 'components.css';
      $this->data['data'] = ['Farinha', 'Ovos', 'Água', 'Côco ralado', 'Açúcar'];
      return \view('/templates/header', $this->data) . \view('include', $this->data) . \view('/templates/footer', $this->data);
   }
}
