<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private array $data;
    private object $category;
    private object $task;

    public function index(Request $r)
    {
        $this->task = new Task();
        $this->data['tasks'] = $this->task->select()->take(10)->get();

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
        $this->category = new Category();
        $categoriesList = $this->category::all();
        $this->data['categories'] = $categoriesList;
        return view('newTask', $this->data);
    }

    public function createAction(Request $r)
    {
        $data = $r->only(['title', 'category_id', 'date', 'description']);
        $data['user_id'] = 1;
        $task = new Task();
        $create = $task->create($data);
        return \redirect(route('home'));
    }

    public function delete(Request $r)
    {
        return "<h1>Delete: " . $r->id . "</h1>";
    }
}
