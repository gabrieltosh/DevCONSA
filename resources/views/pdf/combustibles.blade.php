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
                            <h2>Lista de Combustibles</h2>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="pull-right">
                            <img src="https://consaconsultores.com/wp-content/uploads/2018/02/LOGOCAMIONETA2017.jpg" alt="">
                        </div>
                    </div>
                </div>
                <br>
                <div class="box-body no-padding" >
                    <table class="table table-bordered" style="table-layout: fixed;">
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Descripcion</th>
                    </tr>
                    @foreach ( $combustibles as $combustible )
                        <tr>
                            <td class="text-center">{{ucwords($combustible->tipo)}} </td>
                            <td class="text-center">{{ucwords($combustible->precio)}} </td>
                            <td class="text-center">{{$combustible->descripcion}} </td>
                        </tr>
                    @endforeach
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Descripcion</th>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
