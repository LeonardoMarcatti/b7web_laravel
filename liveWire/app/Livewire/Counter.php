<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;
    public int $value = 0;
    public string $hook = 'test';
    public $color = '';
 
    public function increment(): void
    {
        if ($this->count < 5) {
            $this->count++;
        }
    }
 
    public function decrement(): void
    {
        if ($this->count > 0) {
            $this->count--;
        }
    }

    public function adjustValue(int $val)
    {
        $this->value = $val;
    }

    public function addValue(): void
    {
        $this->count += $this->value;
    }

    public function red() : void
    {
        $this->color = 'red';
    }

    public function black() : void
    {
        $this->color = 'black';
    }

    public function updated() : void
    {
        $this->hook = 'ok';
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
