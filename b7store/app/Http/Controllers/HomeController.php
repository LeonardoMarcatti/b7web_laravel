<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   private array $states;
   private array $categories;
   private array $advertiseList;

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

      $this->advertiseList = [
        ['image' => 'http://placehold.it/100x100', 'title' => 'Produto A', 'price' =>"R$ 138,61", 'href' => '#'],
        ['image' => 'http://placehold.it/350x350', 'title' => 'Produto B', 'price' =>"R$ 189,99", 'href' => '#'],
        ['image' => 'http://placehold.it/160x160', 'title' => 'Produto C', 'price' =>"R$ 150,32", 'href' => '#'],
        ['image' => 'http://placehold.it/110x110', 'title' => 'Produto D', 'price' =>"R$ 245,22", 'href' => '#'],
        ['image' => 'http://placehold.it/250x250', 'title' => 'Produto E', 'price' =>"R$ 1148,33", 'href' => '#'] ,
        ['image' => 'http://placehold.it/150x150', 'title' => 'Produto F', 'price' =>"R$ 512,22", 'href' => '#'],
        ['image' => 'http://placehold.it/180x180', 'title' => 'Produto G', 'price' =>"R$ 52,20", 'href' => '#' ],
        ['image' => 'http://placehold.it/150x150', 'title' => 'Produto H', 'price' =>"R$ 547,22", 'href' => '#'] ,
        ['image' => 'http://placehold.it/200x200', 'title' => 'Produto I', 'price' =>"R$ 123,45", 'href' => '#' ]
      ];

      $data['states'] = $this->states;
      $data['categories'] = $this->categories;
      $data['advertiseList'] = $this->advertiseList;


      return view('home', $data);

   }
}
