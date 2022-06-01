@extends('adminlte::page')

@section('title', 'Alta escritor')


@section('content')
    <div class="flex justify-center flex-wrap p-4 mt-5"> 
        @include("admin.escritores.form")
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop