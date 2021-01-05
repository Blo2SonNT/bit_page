@extends('layouts.app')
@section('title', 'BIT INSTITUTE - Cursos disponibles: ')
@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>{{ $curso->nom_curso }}</h2>

                    <ul>
                        <li><a href="#">Cursos</a></li>
                        <li>Detalles del curso</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="shape-img2"><img src="{{ asset('img/shape/2.svg') }}" alt="image"></div>
    <div class="shape-img3"><img src="{{ asset('img/shape/3.svg') }}" alt="image"></div>
    <div class="shape-img4"><img src="{{ asset('img/shape/4.png') }}" alt="image"></div>
    <div class="shape-img5"><img src="{{ asset('img/shape/5.png') }}" alt="image"></div>
    <div class="shape-img6"><img src="{{ asset('img/shape/6.png') }}" alt="image"></div>
    <div class="shape-img7"><img src="{{ asset('img/shape/7.png') }}" alt="image"></div>
    <div class="shape-img8"><img src="{{ asset('img/shape/8.png') }}" alt="image"></div>
    <div class="shape-img9"><img src="{{ asset('img/shape/9.png') }}" alt="image"></div>
    <div class="shape-img10"><img src="{{ asset('img/shape/10.png') }}" alt="image"></div>
</div>
<!-- End Page Title Area -->
<!-- Start Services Details Area -->
<section class="services-details-area ptb-100">
    <div class="container">
        <div class="services-details-overview">
            <div class="services-details-desc">
                <h3>Detalles del curso</h3>
                <p>{{ $curso->descripcion }}</p>
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $curso->nom_curso }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Duración: {{ $curso->horas_duracion }} horas</h6>
                        <p class="card-text">
                            La asistencia al curso es un requisito para la aprovación del mismo <br>
                            Fecha de inicio: {{ $curso->fec_inicio }} <br>
                            Fecha de finalizacion: {{ $curso->fec_fin }} <br>
                            Sede: {{ $curso->sede }} <br>
                            <span class="h5">Jornadas disponibles</span><br>
                            @if ($curso->jornada_diurna == '1')
                                Jornada diurna&nbsp;&nbsp;<i class="fas fa-sun"></i>
                            @endif
                            @if ($curso->jornada_nocturna == '1')
                                Jornada nocturna&nbsp;&nbsp;<i class="fas fa-moon"></i>
                            @endif
                        </p>
                        <p class="h4"><strong>Precio: $ {{ number_format($curso->precio) }}</strong></p>
                    </div>
                </div>
            </div>

            <div class="services-details-image wow fadeInUp">
                <img src="{{ asset($curso->url_img) }}" alt="image">
            </div>

        </div>
        <div class="services-details-overview">
            <div class="services-details-image wow fadeInUp">
                <img src="{{ asset('img/form.svg') }}" class="w-100" alt="image">
            </div>

            <div class="services-details-desc">
                <h3>Inscripción al curso</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus velit sint ipsam ex tempora repellendus laudantium accusamus nemo aut ullam.</p>
                <form action="{{ route('email.inscripcion') }}" method="GET">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nameUser">Nombre completo</label>
                            <input type="text" class="form-control" id="nameUser" name="nameUser" value="{{ old('nameUser') }}">
                            @error('nameUser')
                            <p class="text-red mt-1" role="alert">
                                <b>{{ $message }}</b>
                            </p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="slcTipoDoc">Tipo documento</label>
                            <select id="slcTipoDoc" name="slcTipoDoc" class="form-control">
                                <option value="cc" selected>C.C</option>
                                <option value="ti">T.I</option>
                                <option value="pasaporte">PASAPORTE</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="email">Correo</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <p class="text-red mt-1" role="alert">
                                <b>{{ $message }}</b>
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="documento">Documento</label>
                            <input type="number" class="form-control" id="documento" name="documento" value="{{ old('documento') }}">
                            @error('documento')
                            <p class="text-red mt-1" role="alert">
                                <b>{{ $message }}</b>
                            </p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}">
                            @error('telefono')
                            <p class="text-red mt-1" role="alert">
                                <b>{{ $message }}</b>
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tarjeta">Numero de tarjeta</label>
                            <input type="number" class="form-control" id="tarjeta" name="tarjeta" value="{{ old('tarjeta') }}">
                            @error('tarjeta')
                            <p class="text-red mt-1" role="alert">
                                <b>{{ $message }}</b>
                            </p>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="ccv">CCV</label>
                            <input type="text" class="form-control" id="ccv" name="ccv" value="{{ old('ccv') }}">
                            @error('ccv')
                            <p class="text-red mt-1" role="alert">
                                <b>{{ $message }}</b>
                            </p>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fecVen">Fec&nbsp;vencimiento</label>
                            <input type="text" class="form-control" id="fecVen" name="fecVen" value="{{ old('fecVen') }}">
                            @error('fecVen')
                            <p class="text-red mt-1" role="alert">
                                <b>{{ $message }}</b>
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                            <label class="form-check-label" for="gridCheck">
                                Acepto el uso de datos personales
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Proceder al pago</button>
                </form>

            </div>
        </div>
    </div>
</section>
<!-- End Services Details Area -->
@endsection
