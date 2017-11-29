<!--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="{{route('tomar_asistencia')}}">asistencia</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
-->

@extends('master')
@section('title','Home')

@section('content')
    <div class="container">
        <div class="row banner">
            <div class="col-md-12">
                <h1 class="text-center margin-top-100 editContent">
                    Contenido principal
                </h1>
                
                <div class="text-center">
                    <img src="/img/laravel.jpeg" width="400">
                </div>
            </div>
        </div>
    </div>
@endsection
