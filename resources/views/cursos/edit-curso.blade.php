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
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Modificar curso') }}</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">
                    Modificar curso: <span><b>{{ $curso->nom_curso }}</b></span>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.curso.update', $curso->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nombreCurso">Nombre del curso</label>
                            <input type="text" class="form-control" name="nombreCurso" id="nombreCurso" value="{{ old('nombreCurso', $curso->nom_curso) }}"  placeholder="Fundamentos de programación">
                            @error('nombreCurso')
                            <p class="text-red mt-1" role="alert">
                                <b>{{ $message }}</b>
                            </p>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="duracion">Duracion</label>
                                <input type="number" min="1" class="form-control" value="{{ old('duracion', $curso->horas_duracion) }}" id="duracion" name="duracion">
                                @error('duracion')
                                <p class="text-red mt-1" role="alert">
                                    <b>{{ $message }}</b>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecIni">Fecha de inicio</label>
                                <input type="date" class="form-control" id="fecIni" value="{{ old('fecIni',$curso->fec_inicio) }}" name="fecIni">
                                @error('fecIni')
                                <p class="text-red mt-1" role="alert">
                                    <b>{{ $message }}</b>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecFin">Fecha de finalización</label>
                                <input type="date" class="form-control" id="fecFin" value="{{ old('fecFin',$curso->fec_fin) }}" name="fecFin">
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
                                    <input type="number" min="1000" class="form-control" id="precio" value="{{ old('precio',$curso->precio) }}" name="precio">
                                </div>
                                @error('precio')
                                <p class="text-red mt-1" role="alert">
                                    <b>{{ $message }}</b>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="sede">Sede</label>
                                {{-- construccion arreglo con items para select  --}}
                                @php
                                $array = [
                                "Seleccione uno...",
                                "sede 1",
                                "sede 2",
                                ];
                                @endphp
                                <select id="sede" name="sede" class="form-control w-100">
                                    @foreach($array as $item)
                                    <option value="{{ $item }}" @if( $curso->sede == $item ) selected @endif> <span class="text-capitalize">{{ $item }}</span> </option>
                                    @endforeach
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
                                        <input type="checkbox" class="custom-control-input" id="jornadaDia" @if( $curso->jornada_diurna == '1' ) checked @endif value="1" name="jornadaDia">
                                        <label class="custom-control-label" for="jornadaDia">Diurna</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="jornadaNoche" @if( $curso->jornada_nocturna == '1' ) checked @endif value="1" name="jornadaNoche">
                                        <label class="custom-control-label" for="jornadaNoche">Nocturna</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ old('descripcion',$curso->descripcion) }}</textarea>
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
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
