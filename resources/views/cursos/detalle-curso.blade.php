@extends('layouts.app')
@section('title', 'BIT INSTITUTE - Administración ')
@section('content')
<div class="container ptb-100">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Administración') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.cursos.view') }}">{{ __('Cursos') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Detalle del curso') }}</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Detallado del curso: ') }} <span class="text-uppercase"><b>{{ $curso->nom_curso }}</b></span></div>
                <div class="card-body">
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-6 d-flex justify-content-center align-items-center">
                                <img src="{{ asset($curso->url_img) }}" class="card-img">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize">
                                        {{ $curso->nom_curso }} <br>
                                        <small><span><b>Duración:&nbsp;</b></span>{{ $curso->horas_duracion }} horas</small>
                                    </h5>
                                    <p class="text-justify">{{ $curso->descripcion }}</p>
                                    <p class="h5">Fecha de inicio: {{ $curso->fec_inicio }}</p>
                                    <p class="h5">Fecha de finalización: {{ $curso->fec_fin }}</p>
                                    <p class="h5">{{ $curso->sede }}</p>
                                    @if ($curso->jornada_diurna == '1')
                                        <p class="h6">Jornada diurna&nbsp;&nbsp;<i class="fas fa-sun"></i></p>
                                    @endif
                                    @if ($curso->jornada_nocturna == '1')
                                        <p class="h6">Jornada nocturna&nbsp;&nbsp;<i class="fas fa-moon"></i></p>
                                    @endif
                                    <p class="h4">Precio: ${{ number_format($curso->precio) }}</p>
                                    <div class="d-flex flex-row-reverse bd-highlight">
                                        <a href="{{ route('admin.curso.edit', $curso->id) }}"><button type="button" class="btn btn-dark btn-md">Editar</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
