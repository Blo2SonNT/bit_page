@extends('layouts.app')
@section('title', 'BIT INSTITUTE - Ingreso ')
@section('content')
<div class="hero-banner banner-bg2 h-fix">
    <section class="faq-contact-area ptb-120">
        <div class="container">
            <div class="section-title">
                <h2>Crear cuenta</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae odio explicabo dolorem quas! Maxime fugit autem magni ratione modi quam tenetur laborum eligendi obcaecati dolores, saepe quis. Vitae quos sed labore deleniti cumque doloribus ipsum ab, reiciendis omnis, consequatur nostrum.</p>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <div class="faq-contact-form" style="padding: 1% 20% ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input id="name" type="text" placeholder="Nombre Completo" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Correo" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input id="password-confirm" type="password" placeholder="Confirma tu Contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group d-flex justify-content-between">
                                    <button type="submit" class="btn btn-dark">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="shape-img2"><img src="{{ asset('img/shape/2.svg') }}" alt="image"></div>

            </div>
            <div class="shape-img3"><img src="{{ asset('img/shape/3.svg') }}" alt="image"></div>
            <div class="shape-img4"><img src="{{ asset('img/shape/4.png') }}" alt="image"></div>
            <div class="shape-img5"><img src="{{ asset('img/shape/5.png') }}" alt="image"></div>
            <div class="shape-img6"><img src="{{ asset('img/shape/6.png') }}" alt="image"></div>
            <div class="shape-img7"><img src="{{ asset('img/shape/7.png') }}" alt="image"></div>
            <div class="shape-img8"><img src="{{ asset('img/shape/8.png') }}" alt="image"></div>
            <div class="shape-img9"><img src="{{ asset('img/shape/9.png') }}" alt="image"></div>
            <div class="shape-img10"><img src="{{ asset('img/shape/10.png') }}" alt="image"></div>

        </div>
    </section>
</div>


@endsection
