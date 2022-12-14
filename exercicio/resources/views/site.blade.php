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
  <x-c_content>
    {{$message}}
  </x-c_content>
@endsection

@section('bottom')
@parent 
<!-- @parent mostra o conteúdo do layout pai-->
  <x-c_bottom>
    @slot('footer')
      {{$footer}}
    @endslot
  </x-c_bottom>
@endsection