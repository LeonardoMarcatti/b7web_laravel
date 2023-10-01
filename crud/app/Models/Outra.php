<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Test;

class Outra extends Model
{
    protected $fillable = ['title', 'content', 'author'];
    
    use SoftDeletes;
    use HasFactory;

    public function test()
    {
        return $this->hasOne(Test::class, 'id_post', 'id');		
    }
}
