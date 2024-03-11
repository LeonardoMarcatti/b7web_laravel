<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostsModel;

class PagesController extends Controller
{
    private object $model;

    public function index()
    {
        $this->model = new PostsModel();
        $posts = $this->model->all();
        return view('home', ['posts' => $posts]);
    }
}
