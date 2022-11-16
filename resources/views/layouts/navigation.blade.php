<ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
    <li class="nav-item active">
        <a class="nav-link d-flex align-items-center" href="{{ url('/dashboard') }}">
            <i data-feather="home"></i>
            <span data-i18n="Dashboard">Dashboard</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link d-flex align-items-center" href="{{ url('/citas') }}">
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
                <a class="dropdown-item d-flex align-items-center" href="{{ url('/configuracion/medicamentos') }}"
                    data-toggle="dropdown" data-i18n="Medicamentos">
                    <span data-i18n="Medicamentos">Medicamentos</span>
                </a>
            </li>
            <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="{{ url('/configuracion/referidos') }}"
                    data-toggle="dropdown" data-i18n="Referidos">
                    <span data-i18n="Referidos">Referidos</span>
                </a>
            </li>
            <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="{{ url('/configuracion/tipo-de-consultas') }}"
                    data-toggle="dropdown" data-i18n="Tipos de Consultas">
                    <span data-i18n="Tipos de Consultas">Tipos de Consultas</span>
                </a>
            </li>
            <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="{{ url('/configuracion/plantillas') }}"
                    data-toggle="dropdown" data-i18n="Plantillas">
                    <span data-i18n="Plantillas">Plantillas</span>
                </a>
            </li>
            {{-- <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="layout-boxed.html"
                    data-toggle="dropdown" data-i18n="Encabezado de Página">
                    <span data-i18n="Encabezado de Página">Encabezado de Página</span>
                </a>
            </li> --}}
            {{-- <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="layout-boxed.html"
                    data-toggle="dropdown" data-i18n="Pié de Página">
                    <span data-i18n="Pié de Página">Pié de Página</span>
                </a>
            </li> --}}
            <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="{{ url('/configuracion/usuarios') }}"
                    data-toggle="dropdown" data-i18n="Usuarios">
                    <span data-i18n="Usuarios">Usuarios</span>
                </a>
            </li>
        </ul>
    </li>
</ul>
