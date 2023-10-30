<?php

namespace App\Livewire;

use Livewire\Component;

class Greet extends Component
{
    public string $name = 'Leo';
    public array $saluteOptions = ['Olá', 'Até mais', 'Oi'];
    public string $color = 'white';
    public string $salute = 'Olá';
    public bool $up = false;
    public string $hook = 'test';

    public function render()
    {   
        return view('livewire.name');
    }

    public function updated() : void
    {
        $this->name = strtoupper($this->name);
        $this->hook = 'ok';
    }
}
