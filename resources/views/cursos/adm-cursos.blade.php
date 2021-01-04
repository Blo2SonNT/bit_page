@extends('layouts.app')

@section('content')
<div class="container ptb-100">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Administración') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Cursos') }}</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        {{ __('Cursos existentes') }}
                        <a href="{{ route('admin.cursos.create') }}"><button type="button" class="btn btn-dark">{{ __('Crear curso') }}</button></a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('alertCursos'))
                        <div class="alert alert-success" role="alert">
                            {{ session('alertCursos') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 40%">Curso</th>
                                <th scope="col">Fecha de inicio</th>
                                <th scope="col">Fecha finalizacion</th>
                                <th scope="col">Detalle</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cursos as $curso)
                            <tr>
                                <th>{{ $curso->nom_curso }}</th>
                                <td>{{ $curso->fec_inicio }}</td>
                                <td>{{ $curso->fec_fin }}</td>
                                <td><a href="{{ route('admin.curso.detalle', $curso->id )}}"><button type="button" class="btn btn-dark">VER</button></a></td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.curso.edit', $curso->id) }}"><button type="button" class="btn btn-primary"><i class="fas fa-pen"></i></button></a>
                                    <form action="{{ route('admin.curso.delete', $curso->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mx-5">
                        {{ $cursos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
