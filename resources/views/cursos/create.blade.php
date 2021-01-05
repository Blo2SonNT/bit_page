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
                            <input type="text" class="form-control" name="nombreCurso" id="nombreCurso" placeholder="Fundamentos de programación" value="{{ old('nombreCurso') }}">
                            @error('nombreCurso')
                            <p class="text-red mt-1" role="alert">
                                <b>{{ $message }}</b>
                            </p>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="duracion">Duracion</label>
                                <input type="number" min="1" class="form-control" id="duracion" name="duracion" value="{{ old('duracion') }}">
                                @error('duracion')
                                <p class="text-red mt-1" role="alert">
                                    <b>{{ $message }}</b>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecIni">Fecha de inicio</label>
                                <input type="date" class="form-control" id="fecIni" name="fecIni" value="{{ old('fecIni') }}">
                                @error('fecIni')
                                <p class="text-red mt-1" role="alert">
                                    <b>{{ $message }}</b>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecFin">Fecha de finalización</label>
                                <input type="date" class="form-control" id="fecFin" name="fecFin" value="{{ old('fecFin') }}">
                                @error('fecFin')
                                <p class="text-red mt-1" role="alert">
                                    <b>{{ $message }}</b>
                                </p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="precio">Precio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" min="1000" class="form-control" id="precio" name="precio" value="{{ old('precio') }}">
                                </div>
                                @error('precio')
                                <p class="text-red mt-1" role="alert">
                                    <b>{{ $message }}</b>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="sede">Sede</label>
                                <select id="sede" name="sede" class="form-control w-100">
                                    <option>Seleccione una...</option>
                                    <option value="sede 1">Sede 1</option>
                                    <option value="sede 2">Sede 1</option>
                                </select>
                                @error('sede')
                                <p class="text-red mt-1" role="alert">
                                    <b>{{ $message }}</b>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
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
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ old('descripcion') }}</textarea>
                            @error('descripcion')
                            <p class="text-red mt-1" role="alert">
                                <b>{{ $message }}</b>
                            </p>
                            @enderror
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
