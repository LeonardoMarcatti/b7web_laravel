@extends('layouts.layout')

@section('header')
    <header>
        <h1>Header</h1>
        @include('components.nav')
    </header>
@endsection

@section('content')
    <div id="content">
        <main>
            <h1>Main</h1>
        </main>
        <aside>
            <h2>Aside</h2>
        </aside>
    </div>
@endsection
