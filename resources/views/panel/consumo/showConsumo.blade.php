<div class="modal fade" id="modal-show-consumo-{{$consumo->id}}" style="display: none;">
        <div class="modal-dialog ">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Datos de Consumo</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header ch-alt">
                        <h2>Datos Personales</h2>
                    </div>
                    <div class="card-body card-padding">
                        <div class="pmo-contact">
                            <ul>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Nombre : </strong>{{ucwords($consumo->usuario->nombre." ".$consumo->usuario->apellido)}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Celular : </strong>{{$consumo->usuario->telefono}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Correo Electronico : </strong>{{ucwords($consumo->usuario->email)}}
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="card">
                        <div class="card-header ch-alt">
                            <h2>Datos de Maquinaria</h2>
                        </div>
                        <div class="card-body card-padding">
                            <div class="pmo-contact">
                                <ul>
                                    <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Modelo :</strong> {{$consumo->usuario->maquinaria->modelo}}
                                        </address>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Marca :</strong> {{$consumo->usuario->maquinaria->marca}}
                                        </address>
                                    </li>
                                     <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Placa :</strong> {{$consumo->usuario->maquinaria->placa}}
                                        </address>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Combustible :</strong> {{$consumo->usuario->maquinaria->combustible->tipo}}
                                        </address>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Capacidad :</strong> {{$consumo->usuario->maquinaria->capacidad}}
                                        </address>
                                        </li>
                                    <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Color :</strong> {{ucwords($consumo->usuario->maquinaria->color)}}
                                        </address>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Placa :</strong> {{$consumo->usuario->maquinaria->kilometraje}} km
                                        </address>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Pertenencia :</strong> {{$consumo->usuario->maquinaria->tipo}}
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