<div class="modal fade" id="modal-show-{{$maquinaria->id}}" style="display: none;">
        <div class="modal-dialog ">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Datos de maquinaria</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header ch-alt">
                        <h2>Datos complementarios de la maquinaria con placa {{$maquinaria->placa}}</h2>
                    </div>
                    <div class="card-body card-padding">
                        <div class="pmo-contact">
                            <ul>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Marca : </strong>{{ucwords($maquinaria->marca)}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Tipo de Combustible : </strong>{{$maquinaria->combustible_id}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Kilometros Recorridos : </strong>{{$maquinaria->kilometraje}} Km
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Capacidad : </strong>{{$maquinaria->capacidad}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Detalle : </strong>{{ucwords($maquinaria->detalle)}}
                                </li>
                                <li>
                                    <i class="zmdi zmdi-view-list"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Tipo :</strong> {{ucwords($maquinaria->tipo)}}
                                    </address>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        </div>