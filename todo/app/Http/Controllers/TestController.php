<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    private object $model;

    public function index(Request $r)
    {
        $id = $r->id;
        $this->model = new User();
        $user = $this->model->find($id);
        $user['tasks'] = $user->tasks;
        $user['categories'] = $user->categories;
        return $user;
    }
}
