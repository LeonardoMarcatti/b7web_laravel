<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private object $post;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $this->post = new Post();
        $posts = $this->post->get(); // Traz todos os dados

        /*
        * Oura forma seria assim
        * $posts = Post::all(); 
        */
        
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Forma mais comum de inserir dados no banco
        $random = rand(0, 10000);
        $new_post = ['title' => 'Meu post número ' . $random, 'content' => 'Que conteúdo blz!', 'author' => 'Leo' ];
        $this->post = new Post($new_post);
        $this->post->save();        
        
        //Outra forma
        // $this->post = new Post();
        // $this->post->title = 'Meu primeiro post';
        // $this->post->content = 'Que conteúdo blz!';
        // $this->post->author = 'Leo';
        // $this->post->save();       

        // Imprime na tela um debug completo

        return \redirect()->route('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id = 3)
    {
        $this->post = new Post();
        $data = $this->post->select('id', 'title')->where('id', $id)->get(); // traz id e title onde o id = 3

        /*
        * Caso preciso é possível adicionar mais campos adicionando o nome do campo dentro do método select ou da forma abaixo. 
        */
        $data = $this->post->select('id', 'title')->addSelect('author')->where('id', $id)->get();

        // $data = $this->post->find(3); // traz a linha cuja chave primária é 3
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return null;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->post = new Post();
        $update = $this->post->where('id', '=', 5)->update([
            'title' => 'Post atualizado',
            'author' => 'Não sei',
            'content' => 'Conteúdo atualizado'
        ]);

        return $update;
        
        /*
        * Outra forma
        */

        /* $update = Post::where('id', '=', 5)->update([
            'title' => 'Post atualizado',
            'author' => 'Não sei',
            'content' => 'Conteúdo atualizado'
        ]);

        return $update; */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $r)
    {
        // $delete = Post::find($id);
        // return ($delete) ? $delete->delete() : 'Não encontrado' ;

        $id = $r->id;
        $this->post = new Post();
        $post = $this->post->find($id);
        if ($post) {
            $post->delete();
            return \redirect()->route('/');
        }

        return 'Erro!';
    }
}
