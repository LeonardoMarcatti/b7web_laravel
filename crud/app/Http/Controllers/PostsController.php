<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostsModel;

class PostsController extends Controller
{
    private object $model;

    public function create(Request $r)
    {
        return view('create');
    }

    public function createPost(Request $r)
    {
        $data = $r->all();
        $this->model = new PostsModel($data);
        $this->model->save();

        return redirect()->route('home');
    }

    public function read(Request $r)
    {
        $this->model = new PostsModel();
        $posts = $this->model->all();
    }

    public function update(Request $r)
    {
        $id = $r->id;
        $this->model = new PostsModel();
        $post = $this->model::find($id);
        return view('update', ['post' => $post]);
    }

    public function delete(Request $r)
    {
        $id = $r->id;
        $this->model = new PostsModel();
        $post = $this->model->find($id);
        $post->delete();
        return redirect()->route('home');
    }

    public function updatePost(Request $r)
    {
        $data = $r->all();
        $this->model = new PostsModel();
        $post = $this->model->find($data['id']);
        $post->update($data);
        return redirect()->route('home');
    }
}
