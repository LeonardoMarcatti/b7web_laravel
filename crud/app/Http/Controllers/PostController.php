<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $r)
    {
        $new_post = ['title' =>'Meu primeiro post', 'content' => 'Que conteúdo blz!', 'author' => 'Leo' ];

        // Forma mais comum de inserir dados no banco
        // $post = new Post($new_post);
        // $post->save();
        
        
        //Outra forma
        $post2 = new Post();
        $post2->title('Meu segundo post');
        $post2->content('Que conteúdo blz!');
        $post2->author('Leo');
        $post2->save();
        

        \dd($post2);
    }
}
