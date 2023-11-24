<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   private array $states;
   private array $categories;

   public function home()
   {
      $this->states = [
         ['value' => 'RS', 'name' => 'Rio Grande do Sul'],
         ['value' => 'SC', 'name' => 'Santa Catarina'],
         ['value' => 'PR', 'name' => 'Paraná'],
         ['value' => 'SP', 'name' => 'São paulo'],
         ['value' => 'RJ', 'name' => 'Rio de Janeiro'],
         ['value' => 'ES', 'name' => 'Espirito Santo'],
         ['value' => 'MG', 'name' => 'Minas Gerais'],
   ];
      $this->categories = [
         ['value' => 'Carros', 'name' => 'Carros'],
         ['value' => 'Eletrônicos', 'name' => 'Eletrônicos'],
         ['value' => 'Roupas', 'name' => 'Roupas'],
         ['value' => 'Esportes', 'name' => 'Esportes'],
         ['value' => 'Bebês', 'name' => 'Bebês']
      ];

      $data['states'] = $this->states;
      $data['categories'] = $this->categories;


      return view('home', $data);

   }
}
