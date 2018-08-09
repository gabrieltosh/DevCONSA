@extends('panel.template-table')
@section('contenido')
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-6">
                        <br>
                        <h2>Personal Registrado</h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="pull-right">
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table id="usuarios" class="table table-striped">
                    <thead>
                        <tr>
                            <th data-column-id="id">ID</th>
                            <th data-column-id="nombre">Nombre</th>
                            <th data-column-id="apellido">Apellido</th>
                            <th data-column-id="commands" data-formatter="commands" data-sortable="false">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $usuarios as $usuario)
                        @if(!$usuario->uso)
                            <tr>
                                <td>{{$usuario->id}}</td>
                                <td class="text-center">{{$usuario->nombre}}</td>
                                <td class="text-center">{{$usuario->apellido}}</td>
                                <td  class="text-center">
                                </td>
                            </tr>
                        @endif
                            @include('panel.asignacion.confirmacion')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <br>
                                <h2>Personal Asignado</h2>
                            </div>
                            <div class="col-sm-6">
                                <div class="pull-right">
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="asignaciones" class="table table-striped">
                            <thead>
                                <tr>
                                    <th data-column-id="id">ID</th>
                                    <th data-column-id="nombre">Nombre</th>
                                    <th data-column-id="apellido">Apellido</th>
                                    <th data-column-id="ci">Carnet de Identidad</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $asignaciones as $asignacion)
                                <tr>
                                    <td>{{$asignacion->id}}</td>
                                    <td class="text-center">{{$asignacion->usuario->nombre}}</td>
                                    <td class="text-center">{{$asignacion->usuario->apellido}}</td>
                                    <td class="text-center">{{$asignacion->usuario->ci}}</td>
                                    <td  class="text-center">
                                    </td>
                                </tr>
                                    @include('panel.asignacion.delete')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <br>
                                <h2>Maquinaria Asignada</h2>
                            </div>
                            <div class="col-sm-6">
                                <div class="pull-right">
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="maquinarias" class="table table-striped">
                            <thead>
                                <tr>
                                    <th data-column-id="id">ID</th>
                                    <th data-column-id="placa">Placa</th>
                                    <th data-column-id="modelo">Modelo</th>
                                    <th data-column-id="kilometraje">Kilometraje</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $maquinarias as $maquinaria)
                                <tr>
                                    <td>{{$maquinaria->id}}</td>
                                    <td class="text-center">{{$maquinaria->maquinaria->placa}}</td>
                                    <td class="text-center">{{$maquinaria->maquinaria->modelo}}</td>
                                    <td class="text-center">{{$maquinaria->maquinaria->kilometraje}} km</td>
                                    </td>
                                </tr>
                                    @include('panel.asignacion.delete')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        //Command Buttons
        $("#usuarios").bootgrid({
            css: {
                icon: 'zmdi icon',
                iconColumns: 'zmdi-view-module',
                iconDown: 'zmdi-expand-more',
                iconRefresh: 'zmdi-refresh',
                iconUp: 'zmdi-expand-less'
            },
            formatters: {

                "commands": function(column, row) {
                        var estado = "<a data-toggle=\"modal\" data-target=\"#modal-estado-"+row.id+"\" class=\"btn btn-icon command-estado btn-success waves-circle\" ><span class=\"zmdi zmdi-check\"></span></a> ";
                        return estado;
                },
            },
            labels: {
                 noResults: "No hay resultados",
                 all: "Todo",
                 infos:"Mostrar de @{{ctx.start}} a @{{ctx.end}} de @{{ctx.total}} registros",
                 search:"Buscar"
             }
        }).on("loaded.rs.jquery.bootgrid", function () {
            /* Executes after data is loaded and rendered */
              $(this).find(".command-estado").click(function (e) {
                $($(this).attr("data-target")).modal("show");
            });
        });
        $("#asignaciones").bootgrid({
            css: {
                icon: 'zmdi icon',
                iconColumns: 'zmdi-view-module',
                iconDown: 'zmdi-expand-more',
                iconRefresh: 'zmdi-refresh',
                iconUp: 'zmdi-expand-less'
            },
            formatters: {

                "commands": function(column, row) {
                    var borrar = "<a data-toggle=\"modal\" data-target=\"#modal-delete-"+row.id+"\" class=\"btn btn-icon command-delete  waves-circle\" ><span style=\"color:red;\" class=\"zmdi zmdi-delete\"></span></a>";
                    return borrar;
                },
            },
            labels: {
                 noResults: "No hay resultados",
                 all: "Todo",
                 infos:"Mostrar de @{{ctx.start}} a @{{ctx.end}} de @{{ctx.total}} registros",
                 search:"Buscar"
             }
        }).on("loaded.rs.jquery.bootgrid", function () {
            /* Executes after data is loaded and rendered */
              $(this).find(".command-delete").click(function (e) {
                $($(this).attr("data-target")).modal("show");
            });
        });
        $("#maquinarias").bootgrid({
            css: {
                icon: 'zmdi icon',
                iconColumns: 'zmdi-view-module',
                iconDown: 'zmdi-expand-more',
                iconRefresh: 'zmdi-refresh',
                iconUp: 'zmdi-expand-less'
            },
            formatters: {

            },
            labels: {
                 noResults: "No hay resultados",
                 all: "Todo",
                 infos:"Mostrar de @{{ctx.start}} a @{{ctx.end}} de @{{ctx.total}} registros",
                 search:"Buscar"
             }
        });
    });
</script>
@stop