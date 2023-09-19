@extends('layout.menu')

@section('content')
    <h1>VUE.JS</h1>

    <p>
        {{ $listado }}
    </p>

    <div id="app">
        <admin-estudiantes 
            :listado="{{ $listado }}">
        <admin-estudiantes>
    </div>
@endsection

@section('scripts')
    <script src="{{ mix('/js/app.js') }}"></script>
@endsection