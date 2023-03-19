<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private array $data;
    private object $model;

    public function index()
    {

        $this->model = new Task();
        $this->data['tab'] = 'ToDo - Home';
        $this->data['tasks'] = $this->model->select()->take(5)->get();
        return \view('home', $this->data);
    }

}
