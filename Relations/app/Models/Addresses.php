<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    protected $fillable = ['address'];
    protected $hidden = ['user_id'];

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }
    
    use HasFactory;
}
