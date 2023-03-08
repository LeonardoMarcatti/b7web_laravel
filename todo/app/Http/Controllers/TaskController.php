<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private array $data;

    public function index(Request $r)
    {
        $tasks = new Task();
        $this->data['tasks'] = $tasks->select()->take(10)->get();

        return "<h1>View: " . $r->id . "</h1>";
    }

    public function edit(Request $r)
    {
        return "<h1>Edit: " . $r->id . "</h1>";
    }

    public function create(Request $r)
    {
        $this->data['tab'] = 'Nova Tarefa';
        $this->data['message'] =  'Nova tarefa';
        return view('newTask', $this->data);
    }

    public function delete(Request $r)
    {
        return \redirect()->route('home');
    }
}
