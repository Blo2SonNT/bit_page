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
                                <input type="text" class="input-newsletter" placeholder="Fundamentos de programación" name="search-curse">
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
<!-- Start Featured Services Area -->
<section class="featured-services-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our Services</span>
            <h2>Our Featured Services</h2>
            <p>Real innovations and a positive customer experience are the heart of successful communication. No fake products and services.</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-featured-box">
                    <div class="icon">
                        <i class="flaticon-analytics"></i>
                    </div>

                    <h3>Marketing Analysis</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>

                    <a href="#" class="default-btn">Read More <span></span></a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-featured-box">
                    <div class="icon color-facd60">
                        <i class="flaticon-mail"></i>
                    </div>

                    <h3>Email Marketing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>

                    <a href="#" class="default-btn">Read More <span></span></a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-featured-box">
                    <div class="icon color-1ac0c6">
                        <i class="flaticon-research"></i>
                    </div>

                    <h3>Website Optimization</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>

                    <a href="#" class="default-btn">Read More <span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Services Area -->

<!-- Start Partner Area -->
<div class="partner-area ptb-100 pt-0">
    <div class="container">
        <div class="partner-slides owl-carousel owl-theme">
            <div class="single-partner-item">
                <a href="#">
                    <img src="{{ asset('img/partner-image/1.png') }}" alt="image">
                    <img src="{{ asset('img/partner-image/1.png') }}" alt="image">
                </a>
            </div>

            <div class="single-partner-item">
                <a href="#">
                    <img src="{{ asset('img/partner-image/2.png') }}" alt="image">
                    <img src="{{ asset('img/partner-image/2.png') }}" alt="image">
                </a>
            </div>

            <div class="single-partner-item">
                <a href="#">
                    <img src="{{ asset('img/partner-image/3.png') }}" alt="image">
                    <img src="{{ asset('img/partner-image/3.png') }}" alt="image">
                </a>
            </div>

            <div class="single-partner-item">
                <a href="#">
                    <img src="{{ asset('img/partner-image/4.png') }}" alt="image">
                    <img src="{{ asset('img/partner-image/4.png') }}" alt="image">
                </a>
            </div>

            <div class="single-partner-item">
                <a href="#">
                    <img src="{{ asset('img/partner-image/5.png') }}" alt="image">
                    <img src="{{ asset('img/partner-image/5.png') }}" alt="image">
                </a>
            </div>

            <div class="single-partner-item">
                <a href="#">
                    <img src="{{ asset('img/partner-image/6.png') }}" alt="image">
                    <img src="{{ asset('img/partner-image/6.png') }}" alt="image">
                </a>
            </div>

            <div class="single-partner-item">
                <a href="#">
                    <img src="{{ asset('img/partner-image/7.png') }}" alt="image">
                    <img src="{{ asset('img/partner-image/7.png') }}" alt="image">
                </a>
            </div>

            <div class="single-partner-item">
                <a href="#">
                    <img src="{{ asset('img/partner-image/8.png') }}" alt="image">
                    <img src="{{ asset('img/partner-image/8.png') }}" alt="image">
                </a>
            </div>

            <div class="single-partner-item">
                <a href="#">
                    <img src="{{ asset('img/partner-image/9.png') }}" alt="image">
                    <img src="{{ asset('img/partner-image/9.png') }}" alt="image">
                </a>
            </div>

            <div class="single-partner-item">
                <a href="#">
                    <img src="{{ asset('img/partner-image/10.png') }}" alt="image">
                    <img src="{{ asset('img/partner-image/10.png') }}" alt="image">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->

<!-- Start Overview Area -->
<section class="overview-area ptb-100 pt-0">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our Services</span>
            <h2>Amazing Business Solution Whatever Your Needs</h2>
            <p>Real innovations and a positive customer experience are the heart of successful communication. No fake products and services.</p>
        </div>

        <div class="overview-box">
            <div class="overview-content">
                <div class="content">
                    <span class="sub-title">Digital Marketing</span>
                    <h2>Creative solutions, creative results</h2>
                    <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication.</p>

                    <div class="features-text">
                        <h4><i class="flaticon-tick"></i> Core Development</h4>
                        <p>No fake products and services. The customer is king, their lives and needs are the inspiration.</p>
                    </div>

                    <div class="features-text">
                        <h4><i class="flaticon-tick"></i> Define Your Choices</h4>
                        <p>No fake products and services. The customer is king, their lives and needs are the inspiration.</p>
                    </div>
                </div>
            </div>

            <div class="overview-image">
                <div class="image">
                    <img src="{{ asset('img/about-img1.png') }}" alt="image">
                </div>
            </div>
        </div>

        <div class="overview-box">
            <div class="overview-image">
                <div class="image">
                    <img src="{{ asset('img/why-choose-img1.png') }}" alt="image">
                </div>
            </div>

            <div class="overview-content">
                <div class="content right-content">
                    <span class="sub-title">Design & Development</span>
                    <h2>Solving problems, building brands</h2>
                    <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication.</p>

                    <ul class="features-list">
                        <li><span><i class="fas fa-check"></i> Recommender systems</span></li>
                        <li><span><i class="fas fa-check"></i> Demand prediction</span></li>
                        <li><span><i class="fas fa-check"></i> Omnichannel analytics</span></li>
                        <li><span><i class="fas fa-check"></i> Lead generation</span></li>
                        <li><span><i class="fas fa-check"></i> Dedicated Developers</span></li>
                        <li><span><i class="fas fa-check"></i> 24/7 Support</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="overview-box">
            <div class="overview-content">
                <div class="content">
                    <span class="sub-title">Social Media Marketing</span>
                    <h2>We are the next generation of the advertising world</h2>
                    <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication.</p>

                    <div class="features-text">
                        <h4><i class="flaticon-tick"></i> Core Development</h4>
                        <p>No fake products and services. The customer is king, their lives and needs are the inspiration.</p>
                    </div>

                    <div class="features-text">
                        <h4><i class="flaticon-tick"></i> Define Your Choices</h4>
                        <p>No fake products and services. The customer is king, their lives and needs are the inspiration.</p>
                    </div>
                </div>
            </div>

            <div class="overview-image">
                <div class="image">
                    <img src="{{ asset('img/features-image/1.png') }}" alt="image">
                </div>
            </div>
        </div>

        <div class="overview-box">
            <div class="overview-image">
                <div class="image">
                    <img src="{{ asset('img/features-image/2.png') }}" alt="image">
                </div>
            </div>

            <div class="overview-content">
                <div class="content right-content">
                    <span class="sub-title">SEO Consultancy</span>
                    <h2>We make smart, good-looking things</h2>
                    <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication.</p>

                    <ul class="features-list">
                        <li><span><i class="fas fa-check"></i> Recommender systems</span></li>
                        <li><span><i class="fas fa-check"></i> Demand prediction</span></li>
                        <li><span><i class="fas fa-check"></i> Omnichannel analytics</span></li>
                        <li><span><i class="fas fa-check"></i> Lead generation</span></li>
                        <li><span><i class="fas fa-check"></i> Dedicated Developers</span></li>
                        <li><span><i class="fas fa-check"></i> 24/7 Support</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Overview Area -->

<!-- Start Features Area -->
<section class="features-area ptb-100 pt-0">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our Features</span>
            <h2>We always try to understand customers expectation</h2>
        </div>

        <div class="tab features-list-tab">
            <ul class="tabs">
                <li><a href="#" class="bg-fa7070">
                        <i class="flaticon-achievement"></i>
                        <span>User Experience</span>
                    </a></li>

                <li><a href="#" class="bg-00aeff">
                        <i class="flaticon-architecture"></i>
                        <span>Product Design</span>
                    </a></li>

                <li><a href="#" class="bg-c679e3">
                        <i class="flaticon-digital-marketing"></i>
                        <span>Digital Marketing</span>
                    </a></li>

                <li><a href="#" class="bg-eb6b3d">
                        <i class="flaticon-analytics"></i>
                        <span>Branding</span>
                    </a></li>

                <li><a href="#">
                        <i class="flaticon-data"></i>
                        <span>Development</span>
                    </a></li>

                <li><a href="#" class="bg-f78acb">
                        <i class="flaticon-research"></i>
                        <span>Marketing</span>
                    </a></li>
            </ul>

            <div class="tab_content">
                <div class="tabs_item">
                    <div class="features-overview">
                        <div class="overview-content">
                            <div class="content">
                                <span class="sub-title">Define Your Choices</span>
                                <h2>User Experience</h2>
                                <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>

                                <ul class="features-list">
                                    <li><span><i class="flaticon-tick"></i> Open Source</span></li>
                                    <li><span><i class="flaticon-tick"></i> Optimal Choice</span></li>
                                    <li><span><i class="flaticon-tick"></i> High Security</span></li>
                                    <li><span><i class="flaticon-tick"></i> Great Advices</span></li>
                                    <li><span><i class="flaticon-tick"></i> Creative Layout</span></li>
                                    <li><span><i class="flaticon-tick"></i> Super Responsive</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="overview-image">
                            <div class="image">
                                <img src="{{ asset('img/features-image/1.png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="features-overview">
                        <div class="overview-image">
                            <div class="image">
                                <img src="{{ asset('img/features-image/2.png') }}" alt="image">
                            </div>
                        </div>

                        <div class="overview-content">
                            <div class="content">
                                <span class="sub-title">Define Your Choices</span>
                                <h2>Product Design</h2>
                                <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>

                                <ul class="features-list">
                                    <li><span><i class="flaticon-tick"></i> Open Source</span></li>
                                    <li><span><i class="flaticon-tick"></i> Optimal Choice</span></li>
                                    <li><span><i class="flaticon-tick"></i> High Security</span></li>
                                    <li><span><i class="flaticon-tick"></i> Great Advices</span></li>
                                    <li><span><i class="flaticon-tick"></i> Creative Layout</span></li>
                                    <li><span><i class="flaticon-tick"></i> Super Responsive</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="features-overview">
                        <div class="overview-content">
                            <div class="content">
                                <span class="sub-title">Define Your Choices</span>
                                <h2>Digital Marketing</h2>
                                <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>

                                <ul class="features-list">
                                    <li><span><i class="flaticon-tick"></i> Open Source</span></li>
                                    <li><span><i class="flaticon-tick"></i> Optimal Choice</span></li>
                                    <li><span><i class="flaticon-tick"></i> High Security</span></li>
                                    <li><span><i class="flaticon-tick"></i> Great Advices</span></li>
                                    <li><span><i class="flaticon-tick"></i> Creative Layout</span></li>
                                    <li><span><i class="flaticon-tick"></i> Super Responsive</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="overview-image">
                            <div class="image">
                                <img src="{{ asset('img/features-image/3.png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="features-overview">
                        <div class="overview-image">
                            <div class="image">
                                <img src="{{ asset('img/features-image/4.png') }}" alt="image">
                            </div>
                        </div>

                        <div class="overview-content">
                            <div class="content">
                                <span class="sub-title">Define Your Choices</span>
                                <h2>Branding</h2>
                                <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>

                                <ul class="features-list">
                                    <li><span><i class="flaticon-tick"></i> Open Source</span></li>
                                    <li><span><i class="flaticon-tick"></i> Optimal Choice</span></li>
                                    <li><span><i class="flaticon-tick"></i> High Security</span></li>
                                    <li><span><i class="flaticon-tick"></i> Great Advices</span></li>
                                    <li><span><i class="flaticon-tick"></i> Creative Layout</span></li>
                                    <li><span><i class="flaticon-tick"></i> Super Responsive</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="features-overview">
                        <div class="overview-content">
                            <div class="content">
                                <span class="sub-title">Define Your Choices</span>
                                <h2>Development</h2>
                                <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>

                                <ul class="features-list">
                                    <li><span><i class="flaticon-tick"></i> Open Source</span></li>
                                    <li><span><i class="flaticon-tick"></i> Optimal Choice</span></li>
                                    <li><span><i class="flaticon-tick"></i> High Security</span></li>
                                    <li><span><i class="flaticon-tick"></i> Great Advices</span></li>
                                    <li><span><i class="flaticon-tick"></i> Creative Layout</span></li>
                                    <li><span><i class="flaticon-tick"></i> Super Responsive</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="overview-image">
                            <div class="image">
                                <img src="{{ asset('img/features-image/5.png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="features-overview">
                        <div class="overview-image">
                            <div class="image">
                                <img src="{{ asset('img/features-image/6.png') }}" alt="image">
                            </div>
                        </div>

                        <div class="overview-content">
                            <div class="content">
                                <span class="sub-title">Define Your Choices</span>
                                <h2>Marketing</h2>
                                <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>

                                <ul class="features-list">
                                    <li><span><i class="flaticon-tick"></i> Open Source</span></li>
                                    <li><span><i class="flaticon-tick"></i> Optimal Choice</span></li>
                                    <li><span><i class="flaticon-tick"></i> High Security</span></li>
                                    <li><span><i class="flaticon-tick"></i> Great Advices</span></li>
                                    <li><span><i class="flaticon-tick"></i> Creative Layout</span></li>
                                    <li><span><i class="flaticon-tick"></i> Super Responsive</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape-img7"><img src="{{ asset('img/shape/7.png') }}" alt="image"></div>
    <div class="shape-img2"><img src="{{ asset('img/shape/2.svg') }}" alt="image"></div>
    <div class="shape-img3"><img src="{{ asset('img/shape/3.svg') }}" alt="image"></div>
    <div class="shape-img4"><img src="{{ asset('img/shape/4.png') }}" alt="image"></div>
</section>
<!-- End Features Area -->
@endsection
