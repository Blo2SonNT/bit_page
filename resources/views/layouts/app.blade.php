<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Estilos Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/odometer.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/meanmenu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nice-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- End Preloader -->
    <div id="app">
        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="aronix-responsive-nav">
                <div class="container">
                    <div class="aronix-responsive-menu">
                        <div class="logo">
                            <a href="{{ route('index.home') }}">
                                <img src="{{ asset('img/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="aronix-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ route('index.home') }}">
                            <img src="{{ asset('img/logo.png') }}" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="{{ route('index.home') }}" class="nav-link">Cursos</a></li>
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Ingreso</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Registro</a>
                                        </li>

                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('index.home') }}">
                                                {{ __('Administrador') }}
                                            </a>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Cerrar Sesion') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                            <div class="others-options">
                                <div class="burger-menu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
        <div class="sidebar-modal">
            <div class="sidebar-modal-inner">
                <div class="sidebar-about-area">
                    <div class="title">
                        <h2>¡Contáctanos! Estás a un solo clic</h2>
                        <p>
                            Recibe toda la información acerca de nuestros bootcamps y cursos de programación virtuales y presenciales
                            en Bogotá. <br>
                            Se otorga certificado de asistencia a los estudiantes que logren los objetivos académicos y cumplan
                            todos los entregables durante el bootcamp o curso. No necesitas conocimientos previos en programación
                            para ninguno de nuestros cursos.
                        </p>
                    </div>
                </div>

                <div class="sidebar-instagram-feed">
                    <h2>Instagram</h2>

                    <ul>
                        <li><a href="#"><img src="{{ asset('img/blog-image/1.jpg') }}" alt="image"></a></li>
                        <li><a href="#"><img src="{{ asset('img/blog-image/2.jpg') }}" alt="image"></a></li>
                        <li><a href="#"><img src="{{ asset('img/blog-image/3.jpg') }}" alt="image"></a></li>
                        <li><a href="#"><img src="{{ asset('img/blog-image/4.jpg') }}" alt="image"></a></li>
                        <li><a href="#"><img src="{{ asset('img/blog-image/5.jpg') }}" alt="image"></a></li>
                        <li><a href="#"><img src="{{ asset('img/blog-image/6.jpg') }}" alt="image"></a></li>
                        <li><a href="#"><img src="{{ asset('img/blog-image/7.jpg') }}" alt="image"></a></li>
                        <li><a href="#"><img src="{{ asset('img/blog-image/8.jpg') }}" alt="image"></a></li>
                    </ul>
                </div>

                <div class="sidebar-contact-area">
                    <div class="contact-info">
                        <div class="contact-info-content">
                            <h2>
                                <a href="tel:+573023349919">+57 302 334 9919</a>
                                <span>o escribenos a</span>
                                <a href="mailto:admisiones@bit.institute">admisiones@bit.institute</a>
                            </h2>

                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <span class="close-btn sidebar-modal-close-btn"><i class="flaticon-close"></i></span>
            </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>

        <section class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Contactenos</h3>

                            <ul class="footer-contact-info">
                                <li>
                                    <i class="flaticon-phone-call"></i>
                                    <span>Lun - Vie : 08:00AM - 06:00PM</span>
                                    <a href="tel:+573023349919">+57 312 123 4567</a>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <span>Tienes alguna pregunta?, escribenos</span>
                                    <a href="mailto:admisiones@bit.institute">admisiones@bit.institute</a>
                                </li>
                                <li>
                                    <i class="flaticon-social-media"></i>
                                    <span>Nuestras redes</span>

                                    <ul class="social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">

                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="single-footer-widget pl-5">
                            <h3>Instagram</h3>

                            <ul class="footer-instagram-post">
                                <li>
                                    <a href="#"><img src="{{ asset('img/instagram-image/1.jpg') }}" alt="image"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('img/instagram-image/2.jpg') }}" alt="image"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('img/instagram-image/3.jpg') }}" alt="image"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('img/instagram-image/4.jpg') }}" alt="image"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('img/instagram-image/5.jpg') }}" alt="image"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('img/instagram-image/6.jpg') }}" alt="image"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('img/instagram-image/7.jpg') }}" alt="image"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('img/instagram-image/8.jpg') }}" alt="image"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="copyright-area">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <p>Todos los derechos reservados.</p>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <ul>
                                <li><a href="#">Terminos y condiciones</a></li>
                                <li><a href="#">Politica de privacidad</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="go-top"><i class="fas fa-chevron-up"></i></div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('js/odometer.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/form-validator.min.js') }}"></script>
    <script src="{{ asset('js/contact-form-script.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
