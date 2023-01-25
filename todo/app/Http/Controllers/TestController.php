<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

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
}
