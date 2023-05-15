<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private array $data;
    private object $model;

    public function index(Request $r)
    {

        if ($r->date) {
            $date = $r->date;
        } else {
            $date = \date('Y-m-d');
        }
        
        $this->model = new Task();
        $this->data['tab'] = 'ToDo - Home';
        $this->data['date_as_string'] = '15 de Dez';
        $this->data['prev_date_btn'] = '2023-03-20';
        $this->data['next_date_btn'] = '1976-02-16';
        $this->data['tasks'] = $this->model->select()->whereDate('date', $date) ->take(5)->orderBy('id', 'desc')->get();
        $this->data['authUser'] = Auth::user()->name;
        $this->data['links'] = 'home';
        return \view('home', $this->data);
    }
}