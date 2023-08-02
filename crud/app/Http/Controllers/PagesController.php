<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    private array $data;

    public function home()
    {
        $this->data['title'] = 'CRUD';
        $this->data['footer'] = 'Footer - CRUD';
        return view('welcome', $this->data);
    }
}
