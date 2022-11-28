@extends('layouts.l_app')

@section('top')
  <x-c_top>
    @slot('title')
      {{$title}}
    @endslot
    @slot('css')
      {{$css}}
    @endslot
  </x-c_top>
@endsection

@section('content')
  <h3>{{$message}}</h3>
@endsection

@section('bottom')
  <x-c_bottom>
    @slot('footer')
      {{$footer}}
    @endslot
  </x-c_bottom>
@endsection