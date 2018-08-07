@extends('panel.template-table')
@section('contenido')

<div class="c-header">
    <h2>Lista de Registros</h2>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                <br>
                <h2>Proyectos Registrados</h2>
            </div>
            <div class="col-sm-6">
                <div class="pull-right">
                    <br>
                    <a href="{{route('proyectos.create')}}" class="btn btn-info"><i class="zmdi zmdi-plus"></i> Nuevo Registro</a>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table id="tabla" class="table table-striped">
            <thead>
                <tr>
                    <th data-column-id="id">ID</th>
                    <th data-column-id="nombre">Nombre</th>
                    <th data-column-id="longitud">Longitud</th>
                    <th data-column-id="contrato">N° de Contrato</th>
                    <th data-column-id="time" data-formatter="estado">Estado</th>

                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $proyectos as $proyecto)
                <tr>
                    <td>{{$proyecto->id}}</td>
                    <td class="text-center">{{$proyecto->nombre}}</td>
                    <td class="text-center">{{$proyecto->longitud}}</td>
                    <td class="text-center">{{$proyecto->numeroContrato}}</td>
                    <td class="text-center">{{$proyecto->time}}</td>
                    <td  class="text-center">
                    </td>
                </tr>
                    @include('panel.proyectos.show')
                    @include('panel.proyectos.delete')
                @endforeach

            </tbody>
        </table>
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
                        var edit="<a href=\"/panel/proyectos/"+row.id+"/edit\" class=\"btn btn-icon command-edit waves-effect waves-circle\"><span style=\"color: #00bcd4;\" class=\"zmdi zmdi-edit\"></span></a> " ;

                        var borrar = "<a data-toggle=\"modal\" data-target=\"#modal-delete-"+row.id+"\" class=\"btn btn-icon command-delete waves-effect waves-circle\" ><span style=\"color:red;\" class=\"zmdi zmdi-delete\"></span></a>";
                        var mostrar="<a data-toggle=\"modal\" data-target=\"#modal-show-"+row.id+"\" class=\"btn btn-icon command-show waves-effect waves-circle\" ><span style=\"color:orange;\" class=\"zmdi zmdi-eye\"></span></a>";

                        return mostrar+" "+edit+" "+borrar;
                },
                "estado": function(column,row){
                    var fecha = new Date();
                    var fecha2 = new Date(row.time);
                    if( fecha2.getTime() > fecha.getTime())
                    {
                        return "<span class=\"label label-success\">En Proceso</span>";
                    }else{
                        return "<span class=\"label label-warning\">Plazo Concluido</span>";
                    }
                }

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
              $(this).find(".command-estado").click(function (e) {
                $($(this).attr("data-target")).modal("show");
            });
               $(this).find(".command-show").click(function (e) {
                $($(this).attr("data-target")).modal("show");
            });
        });
    });
</script>
@stop