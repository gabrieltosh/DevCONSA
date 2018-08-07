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
                <h2>Gerentes Registrados</h2>
            </div>
            <div class="col-sm-6">
                <div class="pull-right">
                    <br>
                    <a href="{{route('gerentes.create')}}" class="btn btn-info"><i class="zmdi zmdi-plus"></i> Nuevo Registro</a>
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
                    <th data-column-id="apellido">Apellido</th>
                    <th data-column-id="ci">Carnet de Identidad</th>
                    <th data-column-id="imagen" data-formatter="imagen">Foto</th>
                    <th data-column-id="activo" data-formatter="estado">Estado</th>
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
                    <td class="text-center">{{$usuario->activo}}</td>
                    <td  class="text-center">
                    </td>
                </tr>
                    @include('panel.gerentes.show')
                    @include('panel.gerentes.delete')
                    @include('panel.gerentes.estado')
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
                    if(row.activo==1)
                    {
                        var estado = "<a data-toggle=\"modal\" data-target=\"#modal-estado-"+row.id+"\" class=\"btn btn-icon command-estado waves-effect waves-circle\" ><span style=\"color: red;\" class=\"zmdi zmdi-close\"></span></a> ";
                    }else{
                        var estado = "<a data-toggle=\"modal\" data-target=\"#modal-estado-"+row.id+"\" class=\"btn btn-icon command-estado waves-effect waves-circle\" ><span style=\"color: green;\" class=\"zmdi zmdi-check\"></span></a> ";
                    }
                        var edit="<a href=\"/panel/gerentes/"+row.id+"/edit\" class=\"btn btn-icon command-edit waves-effect waves-circle\"><span style=\"color: #00bcd4;\" class=\"zmdi zmdi-edit\"></span></a> " ;

                        var borrar = "<a data-toggle=\"modal\" data-target=\"#modal-delete-"+row.id+"\" class=\"btn btn-icon command-delete waves-effect waves-circle\" ><span style=\"color:red;\" class=\"zmdi zmdi-delete\"></span></a>";
                        var mostrar="<a data-toggle=\"modal\" data-target=\"#modal-show-"+row.id+"\" class=\"btn btn-icon command-show waves-effect waves-circle\" ><span style=\"color:orange;\" class=\"zmdi zmdi-eye\"></span></a>";

                        return mostrar+" "+estado+" "+edit+" "+borrar;
                },
                "imagen": function(column,row){
                    return "<img src=\"{{asset('imagenes')}}/usuarios/" +row.imagen+"\" width=\"50px\" height=\"50px\" class=\"img-responsive img-thumbnail\" data-row-id=\"" + row.id + "\">";
                },
                "estado": function(column,row){
                    if(row.activo==1)
                    {
                        return "<span class=\"label label-success\">Activo</span>";
                    }else{
                        return "<span class=\"label label-danger\">No activo</span>";
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