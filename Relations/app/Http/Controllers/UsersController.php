<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    private object $model;

    public function index()
    {
        $this->model = new Users();
        $result = $this->model->select()->get();
        return $result;
    }

    public function findOne(Request $r)
    {
        return Users::find($r->id);
    }

    public function findOneAddress(Request $r)
    {
        return Users::find($r->id)->address;
    }

    public function create(Request $r)
    {

        $data = $r->all();
        $data['password'] = \md5($data['password']);
        $this->model = new Users($data);

        try {
            $this->model->save();
            return 'Usuário salvo com sucesso!';
        } catch (\Throwable $th) {
            return 'Erro ao salvar usuário!';
        }
    }
}
