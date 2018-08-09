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
                            <h2>Lista de Empleados</h2>
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
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Carnet de Identidad</th>
                        <th>Telefono</th>
                        <th>Cargo</th>
                        <th>Email</th>
                        <th>Direccion</th>
                        <th>Maquinaria</th>
                        <th>Estado</th>
                    </tr>
                    @foreach ( $usuarios as $usuario )
                        <tr>
                            <td class="text-center">{{ucwords($usuario->nombre)}} </td>
                            <td class="text-center">{{ucwords($usuario->apellido)}} </td>
                            <td class="text-center">{{$usuario->ci}} </td>
                            <td class="text-center">{{$usuario->telefono}} </td>
                            <td class="text-center">{{ucwords($usuario->cargo)}} </td>
                            <td class="text-center">{{$usuario->email}}</td>
                            <td class="text-center">{{ucwords($usuario->direccion)}}</td>
                            <td class="text-center">{{$usuario->maquinaria->placa}}</td>
                            @if($usuario->activo==1)
                            <td class="text-center bg bg-success">Activo</td>
                            @else
                            <td class="text-center bg bg-danger">No Activo</td>
                            @endif
                        </tr>
                    @endforeach
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Carnet de Identidad</th>
                        <th>Telefono</th>
                        <th>Cargo</th>
                        <th>Email</th>
                        <th>Direccion</th>
                        <th>Maquinaria</th>
                        <th>Estado</th>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
