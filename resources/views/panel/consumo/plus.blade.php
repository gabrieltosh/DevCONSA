<div class="modal fade" id="modal-plus-{{$usuario->id}}" style="display: none;">
<div class="modal-dialog ">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Añadir Consumo</h4>
    </div>
    <div class="modal-body">
            <div class="card">
                    <div class="card-header">
                        <h2>Contenedores de Combustible Destinados al Proyecto <small></small></h2>
                    </div>

                    <div class="card-body">
                        <div class="list-group lg-alt">
                            @foreach ($tanques as $tanque )
                                <div class="list-group-item">
                                    <div class="lgi-heading m-b-5 text-center"><strong>{{ucwords($tanque->nombre)}}</strong></div>

                                    {!! Form::open(['method'=>'POST','route'=> ['consumoSave',$proyecto->id,$usuario->id,$tanque->id]]) !!}

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-sm-4">
                                                {!! Form::number('kilometraje', null, ['class'=>'form-control','placeholder'=>'Kilometraje (Total)','min'=>'1','required']) !!}
                                            </div>
                                            <div class="col-sm-4">

                                                {!! Form::number('consumo', null, ['class'=>'form-control','min'=>1,'max'=>$tanque->total,'placeholder'=>'Consumo','required']) !!}

                                            </div>
                                            <div class="col-sm-4">
                                                <button type="submit" class="btn btn-info btn-sm"><i class="zmdi zmdi-plus"></i> Añadir</button>
                                            </div>
                                        </div>
                                    </div>
                                    {!!Form::close()!!}
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="{{$tanque->porcentaje}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$tanque->porcentaje}}%">
                                            <span class="sr-only">{{$tanque->porcentaje}}% Complete (success)</span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-sm-4"><p class="text-center">Capacidad : <strong>{{$tanque->capacidad}}</strong> litros</p></div>
                                            <div class="col-sm-4"><p class="text-center">Combustible : <strong>{{$tanque->combustible->tipo}}</strong></p></div>
                                            <div class="col-sm-4"><p class="text-center">Restante : <strong>{{$tanque->total}}</strong> litros <small>({{number_format($tanque->porcentaje,2)}} %)</small></p></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <br>
                    </div>
                </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cerrar</button>
    </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>