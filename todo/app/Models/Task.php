<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'description', 'date', 'title', 'category_id', 'done'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function updateTask(array $data)
    {
        $this->where('id', $data['id'])->update(['description' => $data['description'], 'date' => $data['date'],  'title' => $data['title'], 'category_id' => $data['category_id'], 'done' => $data['done']]);
        return true;
    }

    public function getTask(string $id)
    {
        return $this->find($id);
    }

    public function deleteTask(string $id)
    {
        $this->where('id', $id)->delete();
        return true;
    }
}