<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Task;

class TestController extends Controller
{
    private object $model;

    public function index(Request $r)
    {
        $id = $r->id;
        $this->model = new User();
        $user = $this->model->find($id);
        $user['tasks'] = $user->tasks;

        $this->model = new Category();
        foreach ($user['tasks'] as $key => $value) {
            $user['tasks'][$key]->category = $this->model->find($value['category_id']);
        }
        
        return $user;
    }

    public function task(Request $r)
    {
        $user_id = $r->id;
        $task_id = $r->task;

        $this->model = new User();
        $user = $this->model->find($user_id);

        $this->model = new Task();
        $user['task'] = $this->model->find($task_id);
        $user['task']['category'] = $user['task']->category;
        
        return $user;
    }

    public function getAll()
    {
        $this->model = new Category();
        return $this->model->all();
    }

    public function getTask(Request $r)
    {
        $id = $r->id;
        $this->model = new Task();
        $task = $this->model->find($id);
        if (!$task) {
            return 'Task not found!';
        }
        $task->category;
        
        return  $task;
    }

    public function getUserCategories(Request $r)
    {
        $id = $r->id;
        $this->model = new User();
        $user = $this->model->find($id);
        $user->categories;
        
        return ($user);
    }
}