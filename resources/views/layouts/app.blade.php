<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>..:: Cardiac ::..</title>

    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">

    <!-- CSS Libraries -->
    @yield('styles')

</head>

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center"
        data-nav="brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ url('/dashboard') }}">
                        <span class="brand-logo">
                            <img src="{{ asset('app-assets/images/cardiac.svg') }}" alt="logo" width="80">
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item">
                        <a class="nav-link menu-toggle" href="javascript:void(0);">
                            <i class="ficon" data-feather="menu"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-style">
                            <i class="ficon" data-feather="moon"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name font-weight-bolder">{{ Auth::user()->name }}</span>
                            <span class="user-status">{{ Auth::user()->rol }}</span>
                        </div>
                        <span class="avatar">
                            <img class="round" src="../../../app-assets//images/portrait/small/avatar-s-11.jpg"
                                alt="avatar" height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" onclick="event.preventDefault();
                            this.closest('form').submit();">
                                <i class="mr-50" data-feather="power"></i> Cerrar Sesión
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border"
            role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto">
                        <a class="navbar-brand" href="{{ url('/dashboard') }}">
                            <span class="brand-logo">
                                <img src="{{ asset('app-assets/images/cardiac.svg') }}" alt="logo" width="80">
                            </span>
                            <h2 class="brand-text mb-0">Cardiac</h2>
                        </a>
                    </li>
                    <li class="nav-item nav-toggle">
                        <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                            <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="nav-item active">
                        <a class="nav-link d-flex align-items-center" href="{{ url('/dashboard') }}">
                            <i data-feather="home"></i>
                            <span data-i18n="Dashboard">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link d-flex align-items-center" href="">
                            <i data-feather='calendar'></i>
                            <span data-i18n="Citas">Citas</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link d-flex align-items-center" href="">
                            <i data-feather='users'></i>
                            <span data-i18n="Pacientes">Pacientes</span>
                        </a>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather='settings'></i>
                            <span data-i18n="Configuración">Configuración</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="{{ url('/configuracion/antecedentes') }}"
                                    data-toggle="dropdown" data-i18n="Antecedentes">
                                    <span data-i18n="Antecedentes">Antecedentes</span>
                                </a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="layout-boxed.html"
                                    data-toggle="dropdown" data-i18n="Medicamentos">
                                    <span data-i18n="Medicamentos">Medicamentos</span>
                                </a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="layout-boxed.html"
                                    data-toggle="dropdown" data-i18n="Referidos">
                                    <span data-i18n="Referidos">Referidos</span>
                                </a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="layout-boxed.html"
                                    data-toggle="dropdown" data-i18n="Tipos de Consultas">
                                    <span data-i18n="Tipos de Consultas">Tipos de Consultas</span>
                                </a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="layout-boxed.html"
                                    data-toggle="dropdown" data-i18n="Plantillas">
                                    <span data-i18n="Plantillas">Plantillas</span>
                                </a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="layout-boxed.html"
                                    data-toggle="dropdown" data-i18n="Encabezado de Página">
                                    <span data-i18n="Encabezado de Página">Encabezado de Página</span>
                                </a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="layout-boxed.html"
                                    data-toggle="dropdown" data-i18n="Pié de Página">
                                    <span data-i18n="Pié de Página">Pié de Página</span>
                                </a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="layout-boxed.html"
                                    data-toggle="dropdown" data-i18n="Usuarios">
                                    <span data-i18n="Usuarios">Usuarios</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            @yield('contenido')
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">
                Copyright ©
                <script>
                    document.write(new Date().getFullYear())
                </script>. Todos los derechos reservados
            </span><span class="float-md-right d-none d-md-block">Desarrollado por Sogtecnology y
                DevRossDigital.</span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>


    @yield('scripts')
    <!-- Page Specific JS File -->

</body>

</html>
