<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddressesModel;

class AddressController extends Controller
{
    private object $model;

    public function index() : array|object
    {
        $this->model = new AddressesModel();
        $users = $this->model::all();
        return $users;
    }

    public function getAddress(Request $r) : null|object
    {
        $this->model = new AddressesModel();
        $user = $this->model::find($r->id);
        return $user;
    }

    public function addAddress(Request $r) : int|bool
    {
        $data = $r->all();
        $this->model = new AddressesModel($data);

        return $this->model->save();
    }
}
