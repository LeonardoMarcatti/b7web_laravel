<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicesController extends Controller
{
    public function ex1() {

        $people = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,70),  
                'name' => 'Alessandro', 
                'birth' => '29/01/90', 
                'age' => 29
            ],
            [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,70), 
                'name' => 'Bonieky', 
                'birth' => '10/11/1933', 
                'age' => 90
            ],
  
            [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,70), 
                'name' => 'Maria', 
                'birth' => '01/01/2020', 
                'age' => 2
            ]
        ];

        $data['people'] = $people;
        $data['title'] = 'Exercício 1';
        return view('ex1', $data);
    }

    public function ex2() { 
        $data['title'] = 'Exercício 2';
        $url = 'https://i.pravatar.cc/150?img=';
        $data['url'] = $url;
        return view('ex2', $data);
    }
}
