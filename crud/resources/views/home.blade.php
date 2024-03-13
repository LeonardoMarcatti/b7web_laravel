@extends('layouts.layout')

@section('header')
    @include('components.header')
@endsection()
@section('content')
    <div>
        <main>
            @foreach($posts as $post)
                <div class="card">
                    <h1>Post {{$post->id}}</h1>
                    <h2>Título</h2>
                    <h3>{{$post->title}}</h3>
                    <h4>Conteúdo</h4>
                    <p>{{$post->content}}</p>
                    <small>{{$post->author}}</small>
                    <div class="cartFoot">
                        <a href="{{route('update', ['id' => $post->id])}}" class="update">Update <i class="fa-solid fa-pencil"></i></a>
                        <a href="{{route('delete', ['id' => $post->id])}}" class="delete">Delete <i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>

            @endforeach
        </main>
    </div>
@endsection()
