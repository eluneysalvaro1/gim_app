@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('estadisticas.index')
</div>

    @include('estadisticas.especifico')
    @include('estadisticas.graficos')


<div id="dashboard" class="container d-flex">
    @include('rutina.index')
</div>


@endsection
