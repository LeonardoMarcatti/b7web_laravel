<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
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


        $day = Carbon::createFromDate($date);
        $this->model = new Task();
        $this->data['tab'] = 'ToDo - Home';
        $this->data['date_as_string'] = $day->translatedFormat('d/m/Y');
        $this->data['prev_date_btn'] = $day->addDay(-1)->format('y-m-d');
        $this->data['next_date_btn'] = $day->addDay(2)->format('y-m-d');
        $this->data['tasks'] = $this->model->select()->whereDate('date', $date) ->take(5)->orderBy('id', 'desc')->get();
        $this->data['authUser'] = Auth::user()->name;
        $this->data['links'] = 'home';
        return \view('home', $this->data);
    }
}