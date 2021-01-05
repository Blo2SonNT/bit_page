@extends('layouts.app')
@section('title', 'BIT INSTITUTE - Cursos disponibles: ')
@section('content')


<!-- Start Main Banner Area -->
<div class="hero-banner banner-bg2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="hero-main-banner-content">
                            <span class="sub-title">Siempre parece imposible hasta que se hace...</span>
                            <h1>Aprende y certif&iacute;cate en los lenguajes de programaci&oacute;n actuales</h1>
                            <p>Con nuestros bootcamps y cursos de programaci&oacute;n presenciales y online en vivo, adquiere las habilidades en tecnolog&iacute;a que est&acute;n buscando las empresas hoy en d&iacute;a.</p>
                            <form>
                                @csrf
                                <input name="busqueda" type="text" class="input-newsletter" placeholder="Fundamentos de programación" name="search-curse" value="{{ $busqueda }}">
                                <button type="submit">Buscar</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="hero-main-banner-image">
                            <img src="{{ asset('img/banner-image/man.png') }}" class="wow fadeInDown" data-wow-delay="0.6s" alt="man">
                            <img src="{{ asset('img/banner-image/code.png') }}" class="wow fadeInUp" data-wow-delay="0.6s" alt="code">
                            <img src="{{ asset('img/banner-image/carpet.png') }}" class="wow fadeInLeft" data-wow-delay="0.6s" alt="carpet">
                            <img src="{{ asset('img/banner-image/bin.png') }}" class="wow zoomIn" data-wow-delay="0.6s" alt="bin">
                            <img src="{{ asset('img/banner-image/book.png') }}" class="wow bounceIn" data-wow-delay="0.6s" alt="book">
                            <img src="{{ asset('img/banner-image/desktop.png') }}" class="wow fadeInDown" data-wow-delay="0.6s" alt="desktop">
                            <img src="{{ asset('img/banner-image/dot.png') }}" class="wow zoomIn" data-wow-delay="0.6s" alt="dot">
                            <img src="{{ asset('img/banner-image/flower-top-big.png') }}" class="wow fadeInUp" data-wow-delay="0.6s" alt="flower-top-big">
                            <img src="{{ asset('img/banner-image/flower-top.png') }}" class="wow rotateIn" data-wow-delay="0.6s" alt="flower-top">
                            <img src="{{ asset('img/banner-image/keyboard.png') }}" class="wow fadeInUp" data-wow-delay="0.6s" alt="keyboard">
                            <img src="{{ asset('img/banner-image/pen.png') }}" class="wow zoomIn" data-wow-delay="0.6s" alt="pen">
                            <img src="{{ asset('img/banner-image/table.png') }}" class="wow zoomIn" data-wow-delay="0.6s" alt="table">
                            <img src="{{ asset('img/banner-image/tea-cup.png') }}" class="wow fadeInLeft" data-wow-delay="0.6s" alt="tea-cup">
                            <img src="{{ asset('img/banner-image/headphone.png') }}" class="wow rollIn" data-wow-delay="0.6s" alt="headphone">

                            <img src="{{ asset('img/banner-image/main-pic.png') }}" class="wow fadeInUp" data-wow-delay="0.6s" alt="main-pic">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape-img1"><img src="{{ asset('img/shape/1.png') }}" class="wow fadeInUp" data-wow-delay=".9s" alt="image"></div>
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
<!-- End Main Banner Area -->
<!-- Start Blog Area -->
<section class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            @foreach ($cursos as $curso)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post" style="min-height: 95%">
                    <div class="post-image">
                        <a href="#"><img src="{{ asset($curso->url_img) }}" alt="image"></a>
                    </div>

                    <div class="post-content">
                        <div class="post-meta">
                            <ul>
                                <li>Fecha de inicio</li>
                                <li>{{ $curso->fec_inicio }}</li>
                            </ul>
                        </div>

                        <h3><a href="#">{{ $curso->nom_curso }}</a></h3>
                        <p>{{ Str::limit($curso->descripcion, 80) }}</p>

                        <a href="{{ route('user.detalle.curso', $curso->id) }}" class="read-more-btn">Ver curso <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center mx-5">
            {{ $cursos->links() }}
        </div>
    </div>
</section>
<!-- End Blog Area -->
@endsection
