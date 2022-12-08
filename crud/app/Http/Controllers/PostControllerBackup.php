<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostControllerBackup extends Controller
{
    private object $post;

    public function read(Request $r)
    {
        $this->post = new Post();
        $data = $this->post->select('id', 'title')->where('id', 1)->get(); // traz id e title onde o id = 1

        /*
        * Caso preciso é possível adicionar mais campos adicionando o nome do campo dentro do método select ou da forma abaixo. 
        */
        $data = $this->post->select('id', 'title')->addSelect('author')->where('id', 4)->get();

        // $data = $this->post->find(3); // traz a linha cuja chave primária é 3
        return $data;
    }

    public function all(Request $r)
    {
        $this->post = new Post();
        $posts = $this->post->all(); // Traz todos os dados

        /*
        * Oura forma seria assim
        * $posts = Post::all(); 
        */

        return $posts;
    }

    public function update(Request $r)
    {
       
    }

    public function updateMany(Request $r)
    {
        $posts = Post::where('id', '>=', 2)->where('id', '<=', 4)->update([
            'title' => 'Post atualizado many',
            'author' => 'Não sei',
            'content' => 'Conteúdo many'
        ]);

        return $posts;
    }

    public function delete(Request $r)
    {
        
    }

    public function deleteMany(Request $r)
    {
        $posts = Post::where('id', '>=', 15)->where('id', '<=', 17)->delete();
        return $posts;
    }
}
