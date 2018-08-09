<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>CONSA SRL</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="pull-left">
                            <h2>Lista de Maquinarias</h2>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="pull-right">
                            <img src="https://consaconsultores.com/wp-content/uploads/2018/02/LOGOCAMIONETA2017.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="box-body no-padding" >
                    <table class="table table-bordered" style="table-layout: fixed;">
                    <tr>
                        <th class="text-center">Placa</th>
                        <th class="text-center">Modelo</th>
                        <th class="text-center">Combustible</th>
                        <th class="text-center">Marca</th>
                        <th class="text-center">Kilometraje</th>
                        <th class="text-center">Capacidad</th>
                        <th class="text-center">Tipo</th>
                        <th class="text-center">Estado</th>
                    </tr>
                    @foreach ( $maquinarias as $maquinaria )
                        <tr>
                            <td class="text-center">{{$maquinaria->placa}} </td>
                            <td class="text-center">{{ucwords($maquinaria->modelo)}} </td>
                            <td class="text-center">{{ucwords($maquinaria->combustible->tipo)}} </td>
                            <td class="text-center">{{ucwords($maquinaria->marca)}} </td>
                            <td class="text-center">{{$maquinaria->kilometraje}} </td>
                            <td class="text-center">{{$maquinaria->capacidad}}</td>
                            <td class="text-center">{{ucwords($maquinaria->tipo)}}</td>
                            @if($maquinaria->activo==1)
                            <td class="text-center bg bg-success">Activo</td>
                            @else
                            <td class="text-center bg bg-danger">No Activo</td>
                            @endif
                        </tr>
                    @endforeach
                    <tr>
                        <th class="text-center">Placa</th>
                        <th class="text-center">Modelo</th>
                        <th class="text-center">Combustible</th>
                        <th class="text-center">Marca</th>
                        <th class="text-center">Kilometraje</th>
                        <th class="text-center">Capacidad</th>
                        <th class="text-center">Tipo</th>
                        <th class="text-center">Estado</th>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
