<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailsModel extends Model
{
    use HasFactory;
    protected $table = 'emails';
    protected $fillable = ['user_id', 'address'];
}
