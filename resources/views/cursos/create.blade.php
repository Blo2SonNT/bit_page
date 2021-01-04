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
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Nuevo curso') }}</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">
                    {{ __('Nuevo Curso') }}
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.cursos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nombreCurso">Nombre del curso</label>
                            <input type="text" class="form-control" name="nombreCurso" id="nombreCurso" placeholder="Fundamentos de programación">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="duracion">Duracion</label>
                                <input type="number" min="1" class="form-control" id="duracion" name="duracion">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecIni">Fecha de inicio</label>
                                <input type="date" class="form-control" id="fecIni" name="fecIni">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecFin">Fecha de finalización</label>
                                <input type="date" class="form-control" id="fecFin" name="fecFin">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sede">Sede</label>
                                <select id="sede" name="sede" class="form-control w-100">
                                    <option selected>Seleccione una...</option>
                                    <option value="sede 1">Sede 1</option>
                                    <option value="sede 2">Sede 1</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jornada</label>
                                <div class="d-flex justify-content-around align-items-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="jornadaDia" value="1" name="jornadaDia">
                                        <label class="custom-control-label" for="jornadaDia">Diurna</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="jornadaNoche" value="1" name="jornadaNoche">
                                        <label class="custom-control-label" for="jornadaNoche">Nocturna</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imgCurso">Imagen promocional del curso</label>
                            <input type="file" class="form-control-file" id="file" name="file" accept="image/*">
                            @error('file')
                            <div class="alert alert-danger mt-3" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
