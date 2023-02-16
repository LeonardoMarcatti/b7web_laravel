<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    protected $fillable = ['title','value','user_id','address_id'];
    protected $hidden = ['address_id', 'user_id'];
    use HasFactory;

    public function address()
    {
        return $this->hasOne(Addresses::class, 'id', 'address_id');
    }

    public function user()
    {
        return $this->hasOne(Users::class, 'id', 'user_id');
    }
}
