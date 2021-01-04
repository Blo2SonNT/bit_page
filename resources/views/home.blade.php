@extends('layouts.app')
@section('title', 'BIT INSTITUTE - Administración ')
@section('content')
<div class="container ptb-100">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Administración') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Cursos</h5>
                                    <p class="card-text">Administración de los cursos ofertados en la plataforma</p>
                                    <a href="{{ route('admin.cursos.view') }}" class="btn btn-primary">Administrar Cursos</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Usuarios</h5>
                                    <p class="card-text">Administración de usuarios registrados en la plataforma</p>
                                    <a href="#" class="btn btn-primary">Administrar Usuarios</a>
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
