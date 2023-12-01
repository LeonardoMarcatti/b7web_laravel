<?php

namespace App\View\Components\base;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
{
    // public array $data;
    /**
     * Create a new component instance.
     */
    public $data;

    public function __construct()
    {
       //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data['user'] = 'leo';
        return view('components.base.header', $data);
    }
}
