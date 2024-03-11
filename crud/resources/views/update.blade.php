@extends('layouts.layout')

@section('header')
    @include('components.header')
@endsection()
@section('content')
    <div>
        <main id="update">
            <h2>Create Post Form</h2>
            <form action="{{route('createPost')}}" method="post" id="updateForm">
               <input type="number" name="id" id="id" value="{{$post->id}}" hidden>
               @csrf
               <div>
                  <label for="">Title</label>
                  <input type="text" name="title" id="title" value="{{$post->title}}">
               </div>
               <div>
                  <label for="">Content</label>
                  <input type="text" name="content" id="content" value="{{$post->content}}">
               </div>
               <div>
                  <label for="">Author</label>
                  <input type="text" name="author" id="author" value="{{$post->author}}">
               </div>
               <div>
                  <button type="submit">Update</button>
                  <button type="reset">Cancel</button>
               </div>
               <a href="{{route('home')}}">Home</a>
            </form>
        </main>
    </div>
@endsection()
