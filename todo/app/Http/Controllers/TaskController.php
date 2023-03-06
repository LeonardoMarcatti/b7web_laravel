<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private array $data;

    public function create(Request $r)
    {
        $this->data['tab'] = 'Nova Tarefa';
        $this->data['message'] =  'Nova tarefa';
        return view('newTask', $this->data);
    }
}
