<header id="header" class="media">
    <div class="pull-left h-logo">
        <a href="index-2.html" class="hidden-xs">
            CONSA SRL
            <small>Panel de Administración</small>
        </a>

        <div class="menu-collapse" data-ma-action="sidebar-open" data-ma-target="main-menu">
            <div class="mc-wrap">
                <div class="mcw-line top palette-White bg"></div>
                <div class="mcw-line center palette-White bg"></div>
                <div class="mcw-line bottom palette-White bg"></div>
            </div>
        </div>
    </div>

    <ul class="pull-right h-menu">
        <li class="dropdown hidden-xs">
            <a data-toggle="dropdown" href="#"><i class="hm-icon zmdi zmdi-more-vert"></i></a>
            <ul class="dropdown-menu dm-icon pull-right">
                <li class="hidden-xs">
                    <a data-action="fullscreen" href="#"><i class="zmdi zmdi-fullscreen"></i> Pantalla Completa</a>
                </li>
            </ul>
        </li>
        <li class="hm-alerts" data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <a href="#"><i class="hm-icon zmdi zmdi-notifications"></i></a>
        </li>
        <li class="dropdown hm-profile">
            <a data-toggle="dropdown" href="#">
                {{ucwords(Auth::user()->nombre)}}
                <img src="{{asset('imagenes/usuarios/'.Auth::user()->imagen)}}" alt="">
            </a>

            <ul class="dropdown-menu pull-right dm-icon">
                <li>
                    <a href="profile-about.html"><i class="zmdi zmdi-account"></i> Ver Perfil</a>
                </li>
                <li>
                    <a href="{{route('logout')}}"><i class="zmdi zmdi-time-restore"></i> Salir</a>
                </li>
            </ul>
        </li>
    </ul>



</header>