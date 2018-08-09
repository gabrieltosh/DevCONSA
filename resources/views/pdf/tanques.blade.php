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
                            <h2>Lista de Contenedores</h2>
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
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Capacidad</th>
                        <th class="text-center">Restante</th>
                        <th class="text-center">Porcetaje</th>
                        <th class="text-center">Proyecto</th>
                        <th class="text-center">Combustible</th>
                    </tr>
                    @foreach ( $tanques as $tanque )
                        <tr>
                            <td class="text-center">{{ucwords($tanque->nombre)}} </td>
                            <td class="text-center">{{ucwords($tanque->capacidad)}} litros </td>
                            <td class="text-center">{{ucwords($tanque->total)}} litros </td>
                            <td class="text-center">{{number_format($tanque->porcentaje,2)}}%  restante </td>
                            <td class="text-center">{{$tanque->proyecto->nombre}} </td>
                            <td class="text-center">{{$tanque->combustible->tipo}} </td>
                        </tr>
                    @endforeach
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Capacidad</th>
                        <th class="text-center">Restante</th>
                        <th class="text-center">Porcetaje</th>
                        <th class="text-center">Proyecto</th>
                        <th class="text-center">Combustible</th>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
