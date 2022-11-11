<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return \view('welcome');
    }

    public function bv()
    {
        return \view('bv');
    }

    public function logOut()
    {
        return \view('logout');
    }
}
