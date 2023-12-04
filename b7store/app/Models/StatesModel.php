<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;

class StatesModel extends Model
{
    use HasFactory;
    protected $table = 'states';
    protected $fillable = ['value', 'name'];

    public function user() : HasMany
    {
        return $this->hasMany(User::class, 'state_id', 'id');
    }

    public function getStates() : array|object
    {
        return $this->all();
    }
}
