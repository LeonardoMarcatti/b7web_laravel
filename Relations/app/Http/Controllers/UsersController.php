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
        $result = $this->model->all();
        return $result;
    }

    public function findOne(Request $r)
    {
        $this->model = new Users();
        $user = $this->model->find($r->id);
        if (!empty($user)) {
            return $user;
        };

        return 'Não existe usuário com o id n° ' . $r->id ;
    }

    public function findUserAddresses(Request $r)
    {
        $this->model = new Users();
        $user = $this->model->find($r->id);
        $user['addresses'] = $user->addresses;
        return $user;
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
