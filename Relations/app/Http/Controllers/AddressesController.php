<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    public function index(Request $r)
    {
        return Addresses::get();
    }

    public function findOne(Request $r)
    {
        $id = $r->id;
        return Addresses::select()->where('id', '=', $id)->get();
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
