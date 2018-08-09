<aside id="s-main-menu" class="sidebar">
    <div class="smm-header">
        <i class="zmdi zmdi-long-arrow-left" data-ma-action="sidebar-close"></i>
    </div>

    <ul class="smm-alerts">
        <li class="active" data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-email"></i>
        </li>
        <li data-user-alert="sua-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-notifications"></i>
        </li>
        <li data-user-alert="sua-tasks" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-view-list-alt"></i>
        </li>
    </ul>

    <ul class="main-menu">
        <li class="{{active('panel')}}">
            <a href="{{route('panel')}}"><i class="zmdi zmdi-home"></i> Inicio</a>
        </li>
        <li class="sub-menu {{active(['administradores.*','gerentes.*','empleados.*'])}}">
            <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Personal</a>
            <ul>
                <li class="{{active('administradores.*')}}"><a href="{{route('administradores.index')}}">Administradores</a></li>
                <li class="{{active('gerentes.*')}}"><a href="{{route('gerentes.index')}}">Gerentes</a></li>
                <li class="{{active('empleados.*')}}"><a href="{{route('empleados.index')}}">Empleados</a></li>
            </ul>
        </li>
        <li class="sub-menu {{active(['proyectos.*','maquinarias.*','combustibles.*'])}}">
            <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Administracion</a>
            <ul>
                <li class="{{active('proyectos.*')}}"><a href="{{route('proyectos.index')}}">Proyecto</a></li>
                <li class="{{active('maquinarias.*')}}"><a href="{{route('maquinarias.index')}}">Maquinaria</a></li>
                <li class="{{active('combustibles.*')}}"><a href="{{route('combustibles.index')}}">Combustible</a></li>
                <li class="{{active('contenedores.*')}}"><a href="{{route('contenedores.index')}}">Contenedores</a></li>

            </ul>
        </li>
        <li class="sub-menu {{active(['panel/asignaciones','panel/asignaciones/*','panel/consumos','panel/consumos/proyecto/*'])}}">
            <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Gestion de Proyectos</a>
            <ul>
                <li class="{{active(['panel/asignaciones','panel/asignaciones/*'])}}"><a href="{{route('asignaciones')}}">Asignaciones</a></li>
                <li class="{{active(['panel/consumos','panel/consumos/proyecto/*'])}}"><a href="{{route('consumoProyectos')}}">Consumos</a></li>
            </ul>
        </li>
    </ul>
</aside>