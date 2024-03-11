@extends('layouts.layout')

@section('header')
    @include('components.header')
@endsection()
@section('content')
    <div>
        <main id="update">
            <h2>Update Post Form</h2>
            <form action="{{route('createPost')}}" method="post" id="updateForm">
               @csrf
               <div>
                  <label for="">Title</label>
                  <input type="text" name="title" id="title">
               </div>
               <div>
                  <label for="">Content</label>
                  <input type="text" name="content" id="content">
               </div>
               <div>
                  <label for="">Author</label>
                  <input type="text" name="author" id="author">
               </div>
               <div>
                  <button type="submit">Create</button>
                  <button type="reset">Cancel</button>
               </div>
               <a href="{{route('home')}}">Home</a>
            </form>
        </main>
    </div>
@endsection()
