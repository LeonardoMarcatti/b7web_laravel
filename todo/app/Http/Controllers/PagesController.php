<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PagesController extends Controller
{
    public function index()
    {
        return \view('layouts/layout_home');
    }
}
