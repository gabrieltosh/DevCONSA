@extends('panel.template-table')
@section('contenido')

<div class="c-header">
    <h2>Lista de Registros</h2>
</div>

<div class="card animated flipInX   ">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                <br>
                <h2>Combustibles Registrados</h2>
            </div>
            <div class="col-sm-6">
                <div class="pull-left">
                    <br>
                    <a href="{{route('combustiblepdf')}}" class="btn btn-info"><i class="zmdi zmdi-file"></i> Reporte</a>
                </div>
                <div class="pull-right">
                    <br>
                    <a href="{{route('combustibles.create')}}" class="btn btn-info"><i class="zmdi zmdi-plus"></i> Nuevo Registro</a>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table id="tabla" class="table table-striped">
            <thead>
                <tr>
                    <th data-column-id="id">ID</th>
                    <th data-column-id="tipo">Tipo</th>
                    <th data-column-id="precio">Precio</th>
                    <th data-column-id="descripcion">Descripcion</th>
                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $combustibles as $combustible)
                <tr>
                    <td>{{$combustible->id}}</td>
                    <td class="text-center">{{$combustible->tipo}}</td>
                    <td class="text-center">Bs {{$combustible->precio}}</td>
                    <td class="text-center">{{$combustible->descripcion}}</td>
                    <td  class="text-center">
                    </td>
                </tr>
                    @include('panel.combustibles.delete')
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
                        var edit="<a href=\"/panel/combustibles/"+row.id+"/edit\" class=\"btn btn-icon command-edit waves-effect waves-circle\"><span style=\"color: #00bcd4;\" class=\"zmdi zmdi-edit\"></span></a> " ;

                        var borrar = "<a data-toggle=\"modal\" data-target=\"#modal-delete-"+row.id+"\" class=\"btn btn-icon command-delete waves-effect waves-circle\" ><span style=\"color:red;\" class=\"zmdi zmdi-delete\"></span></a>";
                        return  edit+" "+borrar;
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
    });
</script>
@stop