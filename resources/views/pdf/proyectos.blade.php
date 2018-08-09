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
                            <h2>Lista de Proyectos</h2>
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
                        <th class="text-center">Longitud</th>
                        <th class="text-center">N° de Contrato</th>
                        <th class="text-center">Fecha de Contrato</th>
                        <th class="text-center">Monto</th>
                        <th class="text-center">Plazo</th>
                        <th class="text-center">Fecha Proceder</th>
                        <th class="text-center">Fecha Finalización</th>
                    </tr>
                    @foreach ( $proyectos as $proyecto )
                        <tr>
                            <td class="text-center">{{$proyecto->nombre}} </td>
                            <td class="text-center">{{ucwords($proyecto->longitud)}} km </td>
                            <td class="text-center">{{$proyecto->numeroContrato}} </td>
                            <td class="text-center">{{ucwords($proyecto->fechaContrato)}} </td>
                            <td class="text-center">Bs {{ucwords($proyecto->monto)}} </td>
                            <td class="text-center">{{$proyecto->plazo}} meses</td>
                            <td class="text-center">{{$proyecto->fechaProceder}}</td>
                            <td class="text-center">{{ucwords($proyecto->time)}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Longitud</th>
                        <th class="text-center">N° de Contrato</th>
                        <th class="text-center">Fecha de Contrato</th>
                        <th class="text-center">Monto</th>
                        <th class="text-center">Plazo</th>
                        <th class="text-center">Fecha Proceder</th>
                        <th class="text-center">Fecha Finalización</th>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
