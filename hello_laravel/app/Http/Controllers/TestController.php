<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $value = 'value';
        return \view('test', [$value]);
    }
}
