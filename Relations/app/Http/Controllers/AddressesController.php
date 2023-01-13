<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    private object $model; 

    public function index(Request $r)
    {
        return Addresses::get();
    }

    public function findOne(Request $r)
    {
        $this->model = new Addresses();
        $address = $this->model->find($r->id);
        $address['user'] = $address->user;
        return $address;
    }

    public function create(Request $r)
    {

        $data = $r->all();
        $this->model = new Addresses($data);

        try {
            $this->model->save();
            return 'Endereço salvo com sucesso!';
        } catch (\Throwable $th) {
            return 'Erro ao salvar endereço!';
        }
    }

}
