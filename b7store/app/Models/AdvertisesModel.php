<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertisesModel extends Model
{
    use HasFactory;
    protected $table = 'advertises';
    protected $fillable = ['title', 'slug','price','negotiate','description','contact','user_id', 'views', 'state_id', 'category_id'];
}
