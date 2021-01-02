@extends('layouts.app')
@section('title', 'BIT INSTITUTE - Ingreso ')
@section('content')
<div class="hero-banner banner-bg2 h-fix">
    <section class="faq-contact-area ptb-120">
        <div class="container">
            <div class="section-title">
                <h2>Ingresar a mi cuenta</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, aliquam. Velit at possimus repellat est ratione aliquam harum natus quas.</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="faq-contact-image">
                        <img src="{{ asset('img/login.svg') }}" class="w-50 wow fadeIn" alt="image" data-wow-delay="0.6s">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="faq-contact-form">
                        <form method="POST" action="{{ route('login') }}" class="wow fadeIn" data-wow-delay="0.6s">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Correo" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Contraseña">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group d-flex justify-content-between">

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label user-select-none" for="remember">
                                                {{ __('Recuerdame') }}
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-dark">
                                            {{ __('Ingresar') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="shape-img3"><img src="{{ asset('img/shape/3.svg') }}" alt="image"></div>
    <div class="shape-img4"><img src="{{ asset('img/shape/4.png') }}" alt="image"></div>
    <div class="shape-img5"><img src="{{ asset('img/shape/5.png') }}" alt="image"></div>
    <div class="shape-img6"><img src="{{ asset('img/shape/6.png') }}" alt="image"></div>
    <div class="shape-img7"><img src="{{ asset('img/shape/7.png') }}" alt="image"></div>
    <div class="shape-img8"><img src="{{ asset('img/shape/8.png') }}" alt="image"></div>
    <div class="shape-img9"><img src="{{ asset('img/shape/9.png') }}" alt="image"></div>
    <div class="shape-img10"><img src="{{ asset('img/shape/10.png') }}" alt="image"></div>
</div>


@endsection
