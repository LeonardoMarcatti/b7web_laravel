<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    private array $data;
    private object $category;
    private object $model;

    private function getAuthUser()
    {
        return $this->data['authUser'] = Auth::user()->name;
    }

    public function index(Request $r)
    {
        $this->model = new Task();
        $this->getAuthUser();
        $this->data['tasks'] = $this->model->select()->take(10)->get();

        return "<h1>View: " . $r->id . "</h1>";
    }

    public function getTask(Request $r)
    {
        $id = $r->id;
        $this->model = new Task();
        $this->data['task'] = $this->model->getTask($id);
        $this->data['tab'] = 'Editar Tarefa';
        $this->data['links'] = 'edit';
        $this->getAuthUser();
        $this->category = new Category();
        $categoriesList = $this->category->getCatagories();
        $this->data['categories'] = $categoriesList;
        if (!$this->data['task']) {
            return \redirect(route('home'));
        };

        return view('taskEdit', $this->data);
    }

    public function edit(Request $r)
    {
        $data = $r->only(['id', 'title', 'category_id', 'date', 'description', 'checkbox']);
        $data['done'] = $r['checkbox'] ? 1:0;
        $this->model = new Task();
        $foundTask = $this->model->getTask($data['id']);

        if (!$foundTask) {
            return 'Task not found!';
        }

        if ($this->model->updateTask($data)) {
            return \redirect(route('home'));
        }        
    }

    public function taskUpdate(Request $r)
    {
        $this->model = new Task();
        $task = $this->model->getTask($r->id);
        if ($task) {
            $task->done = $r->status;
            $task->save();
            return ['success' => true];
        }
        return ['success' => false];
    }

    public function create(Request $r)
    {
        $this->data['tab'] = 'Nova Tarefa';
        $this->getAuthUser();
        $this->category = new Category();
        $categoriesList = $this->category::all();
        $this->data['categories'] = $categoriesList;
        $this->data['links'] = 'create';
        return view('newTask', $this->data);
    }

    public function createAction(Request $r)
    {
        $data = $r->only(['title', 'category_id', 'date', 'description']);
        $data['user_id'] = 1;
        $model = new Task();
        $model->create($data);
        return \redirect(route('home'));
    }

    public function redirectDelete(Request $r)
    {
        $this->data['tab'] = 'Deletar';
        $this->data['id'] = $r->id;
        $this->data['links'] = 'delete';
        $this->getAuthUser();
        $this->model = new Task();
        $foundTask = $this->model->getTask($r->id);
        if ($foundTask) {
            return \view('sure', ['id' => $r->id], $this->data);
        }

        return \redirect(route('home'));
    }

    public function delete(Request $r)
    {

        $this->model = new Task();
        if ($this->model->deleteTask($r->id)) {
            return \redirect(route('home'));
        }
    }
}
