@extends('layouts.l_app2')

@section('top')
  <x-c_top>
    @slot('title')
      {{$title}}
    @endslot
    @slot('css')
      {{$css}}
    @endslot
    @slot('app')
      {{$app}}
    @endslot
  </x-c_top>
@endsection

@section('aside')
  <x-aside>
    {{$aside}}
  </x-aside>
@endsection

@section('main')
  <x-main>
    {{$main}}
  </x-main>
@endsection

@section('bottom')
  <x-c_bottom>
    @slot('footer')
      {{$footer}}
    @endslot
  </x-c_bottom>
@endsection