<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class hero extends Component
{
   /**
    * Create a new component instance.
    */

   public array $states;
   public array $categories;

   public function __construct()
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
   }

   /**
    * Get the view / contents that represent the component.
    */
   public function render(): View|Closure|string
   {
      $data['states'] = $this->states;
      return view('components.hero');
   }
}
