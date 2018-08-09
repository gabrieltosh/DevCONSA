@extends('panel.template-table')
@section('contenido')
<div class="c-header">
        <h2>Proyecto Designado</h2>
    </div>

    <div class="card" id="profile-main">
        <div class="pm-overview c-overflow">
            <div class="pmo-pic">
                <div class="p-relative">
                    <a href="#">
                        <img class="img-responsive" src="{{asset('img/headers/sm/7.png')}}" alt="">
                    </a>

                    <div class="dropdown pmop-message">

                        <div class="dropdown-menu">
                            <textarea placeholder="Write something..."></textarea>

                            <button class="btn bgm-green btn-float"><i class="zmdi zmdi-mail-send"></i></button>
                        </div>
                    </div>
                </div>


                <div class="pmo-stat">
                    <h2 class="m-0 c-white">{{$proyecto->nombre}}</h2>
                    N° de Contrato : {{$proyecto->numeroContrato}}
                </div>
            </div>

            <div class="pmo-block pmo-contact hidden-xs">
                <h2>Detalles</h2>

                <ul>
                    <li><i class="zmdi zmdi-calendar"></i> Fecha de Contrato : {{date('Y-m-j',strtotime($proyecto->fechaContrato))}}</li>
                    <li><i class="zmdi zmdi-calendar-check"></i> Fecha para Proceder : {{date('Y-m-j',strtotime($proyecto->fechaProceder))}}</li>
                    <li><i class="zmdi zmdi-time-countdown"></i> Plazo : {{$proyecto->plazo}} meses</li>
                    <li><i class="zmdi zmdi-calendar-note"></i> Fecha de Finalizacion : {{$proyecto->time}}</li>
                    <li><i class="zmdi zmdi-trending-up"></i> Longitud :{{$proyecto->longitud}} km </li>
                </ul>
            </div>
        </div>

        <div class="pm-body clearfix">
            <div class="pmb-block">
                <div class="pmbb-header">
                    <h2><i class="zmdi zmdi-equalizer m-r-5"></i> Maquinaria Asignada</h2>
                </div>
                <div class="pmbb-body ">
                <div class="table-responsive">
                        <table id="tabla" class="table table-striped">
                            <thead>
                                <tr>
                                    <th data-column-id="id">ID</th>
                                    <th data-column-id="nombre">Nombre</th>
                                    <th data-column-id="apellido">Apellido</th>
                                    <th data-column-id="ci">Carnet de Identidad</th>
                                    <th data-column-id="imagen" data-formatter="imagen">Foto</th>
                                    <th data-column-id="foto" data-formatter="foto">Maquinaria</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $usuarios as $usuario)
                                <tr>
                                    <td>{{$usuario->id}}</td>
                                    <td class="text-center">{{$usuario->nombre}}</td>
                                    <td class="text-center">{{$usuario->apellido}}</td>
                                    <td class="text-center">{{$usuario->ci}}</td>
                                    <td class="text-center">{{$usuario->imagen}}</td>
                                    <td class="text-center">{{$usuario->maquinaria->imagen}}</td>
                                    <td  class="text-center">
                                    </td>
                                </tr>
                                    @include('panel.consumo.show')
                                    @include('panel.consumo.plus')
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="pmb-block">
                    <div class="pmbb-header">
                        <h2><i class="zmdi zmdi-equalizer m-r-5"></i> Consumos Registrados</h2>
                    </div>
                    <div class="pmbb-body ">
                    <div class="table-responsive">
                            <table id="consumo" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th data-column-id="id">ID</th>
                                        <th data-column-id="fecha">Fecha</th>
                                        <th data-column-id="placa">Placa</th>
                                        <th data-column-id="nombre">Nombre</th>
                                        <th data-column-id="apellido">Apellido</th>
                                        <th data-column-id="commands" data-formatter="commands" data-sortable="false">Opciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $consumos as $consumo)
                                    <tr>
                                        <td>{{$consumo->id}}</td>
                                        <td>{{$consumo->created_at}}</td>
                                        <td class="text-center">{{$consumo->usuario->maquinaria->placa}}</td>
                                        <td class="text-center">{{$consumo->usuario->nombre}}</td>
                                        <td class="text-center">{{$consumo->cantidad}} litros</td>
                                        <td class="text-center"></td>
                                    </tr>
                                    @include('panel.consumo.showConsumo')
                                    @endforeach
                                </tbody>
                            </table>
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
        $("#tabla").bootgrid({
            css: {
                icon: 'zmdi icon',
                iconColumns: 'zmdi-view-module',
                iconDown: 'zmdi-expand-more',
                iconRefresh: 'zmdi-refresh',
                iconUp: 'zmdi-expand-less'
            },
            formatters: {

                "commands": function(column, row) {
                        var mostrar="<a data-toggle=\"modal\" data-target=\"#modal-show-"+row.id+"\" class=\"btn btn-icon command-show waves-effect waves-circle\" ><span style=\"color:orange;\" class=\"zmdi zmdi-eye\"></span></a>";

                        var mas="<a data-toggle=\"modal\" data-target=\"#modal-plus-"+row.id+"\" class=\"btn btn-icon command-plus waves-effect waves-circle\" ><span style=\"color:green;\" class=\"zmdi zmdi-plus\"></span></a>";

                        return mostrar+" "+mas;
                },
                "imagen": function(column,row){
                    return "<img src=\"{{asset('imagenes')}}/usuarios/" +row.imagen+"\" width=\"50px\" height=\"50px\" class=\"img-responsive img-thumbnail\" data-row-id=\"" + row.id + "\">";
                },
                "foto": function(column,row){
                    return "<img src=\"{{asset('imagenes')}}/maquinarias/" +row.foto+"\" width=\"50px\" height=\"50px\" class=\"img-responsive img-thumbnail\" data-row-id=\"" + row.id + "\">";
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
               $(this).find(".command-show").click(function (e) {
                $($(this).attr("data-target")).modal("show");
            });
            $(this).find(".command-plus").click(function (e) {
                $($(this).attr("data-target")).modal("show");
            });
        });
        $("#consumo").bootgrid({
            css: {
                icon: 'zmdi icon',
                iconColumns: 'zmdi-view-module',
                iconDown: 'zmdi-expand-more',
                iconRefresh: 'zmdi-refresh',
                iconUp: 'zmdi-expand-less'
            },
            formatters: {

                "commands": function(column, row) {
                        var mostrar="<a data-toggle=\"modal\" data-target=\"#modal-show-consumo-"+row.id+"\" class=\"btn btn-icon command-show-consumo waves-effect waves-circle\" ><span style=\"color:orange;\" class=\"zmdi zmdi-eye\"></span></a>";

                        return mostrar;
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
               $(this).find(".command-show-consumo").click(function (e) {
                $($(this).attr("data-target")).modal("show");
            });
        });
    });
</script>
@stop
