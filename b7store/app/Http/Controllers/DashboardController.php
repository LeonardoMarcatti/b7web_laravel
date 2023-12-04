<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\StatesModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    private object $model;
    private array $data;

    public function myAccount()
    {
        $this->model = new StatesModel();
        $this->data['user'] = Auth::user();
        $this->data['states'] = $this->model->getStates();
        return view('dashboard', $this->data);
    }

    public function myAccountAction(UpdateProfileRequest $r)
    {
        $this->data = $r->only(['name', 'email', 'state_id']);
        $this->model = new User();
        $stateRegister = StatesModel::find($this->data['state_id']);

        if (\is_null($stateRegister)) {
            return back()->with('errorMessage', 'Estado não encontrado!');;
        }
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->update($this->data);
        return back()->with('success', 'Perfil atualizado com sucesso!');
    }
}
