<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    private object $model;

    public function index() : array|object
    {
        $this->model = new User();
        $users = $this->model::all();
        return $users;
    }

    public function getUser(Request $r) : null|object
    {
        $this->model = new User();
        $user = $this->model::find($r->id);
        return $user;
    }

    public function addUser(Request $r) : int|bool
    {
        $data = $r->all();
        $this->model = new User($data);

        return $this->model->save();
    }
}
