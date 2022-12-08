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
        $posts = $this->post->all(); // Traz todos os dados

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
        $new_post = ['title' =>'Meu primeiro post', 'content' => 'Que conteúdo blz!', 'author' => 'Leo' ];

        // Forma mais comum de inserir dados no banco
        // $post = new Post($new_post);
        // $post->save();
        
        
        //Outra forma
        $this->post = new Post();
        $this->post->title = 'Meu segundo post';
        $this->post->content = 'Que conteúdo blz!';
        $this->post->author = 'Leo';
        $this->post->save();       

        // Imprime na tela um debug completo
        dd($this->post);
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
    public function show($id)
    {
        $this->post = new Post();
        $data = $this->post->select('id', 'title')->where('id', $id)->get(); // traz id e title onde o id = 1

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
        $post = Post::find($id);
        $post->title = 'Post atualizado';
        $post->author = 'Seu Zé';
        $post->content = 'Conteúdo atual';
        $post->save();
        return $post;
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
        $post = Post::find(5);
        $post->title = 'Post atualizado';
        $post->author = 'Seu Zé';
        $post->content = 'Conteúdo atual';
        $post->save();
        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        return ($post) ? $post->delete() : 'Não encontrado' ;
    }
}
