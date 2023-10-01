<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Test extends Model
{

    protected $fillable = ['text', 'id_post'];
    
    use HasFactory;

    public function posts()
    {
        return $this->belongsTo(Post::class, 'id_post', 'id');	
    }
}
