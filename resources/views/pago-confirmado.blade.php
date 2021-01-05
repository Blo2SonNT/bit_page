@extends('layouts.app')
@section('title', 'BIT INSTITUTE - Cursos disponibles: ')
@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mt-5">
                    <div class="w-100 d-flex justify-content-center mt-5" style="width: 100%;">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://png.pngtree.com/png-vector/20191113/ourmid/pngtree-green-check-mark-icon-flat-style-png-image_1986021.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Pago confirmado</h5>
                                        <p class="card-text">Recibiras toda la información en tu correo electronico, recuerda que te esperamos el dia y hora indicados. Te esperamos</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

@endsection
