<div class="modal fade" id="modal-show-{{$usuario->id}}" style="display: none;">
        <div class="modal-dialog ">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Datos de Usuario</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header ch-alt">
                        <h2>Datos Personales de {{ucwords($usuario->nombre." ".$usuario->apellido)}}</h2>
                    </div>
                    <div class="card-body card-padding">
                        <div class="pmo-contact">
                            <ul>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Cargo : </strong>{{ucwords($usuario->cargo)}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Fecha de Nacimiento : </strong>{{$usuario->nacimiento}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Genero : </strong>{{ucwords($usuario->genero)}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Correo Electronico : </strong>{{$usuario->email}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Tipo : </strong>{{ucwords($usuario->tipo)}}
                                </li>
                                <li>
                                    <i class="zmdi zmdi-view-list"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Direccion :</strong> {{$usuario->direccion}}
                                    </address>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-view-list"></i>
                                    <address class="m-b-0 ng-binding">
                                        <strong>Celular :</strong> {{$usuario->telefono}}
                                    </address>
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
                                    @if(!is_null($usuario->maquinaria_id))
                                    <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Modelo :</strong> {{$usuario->maquinaria->modelo}}
                                        </address>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Marca :</strong> {{$usuario->maquinaria->marca}}
                                        </address>
                                    </li>
                                     <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Placa :</strong> {{$usuario->maquinaria->placa}}
                                        </address>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Combustible :</strong> {{$usuario->maquinaria->combustible->tipo}}
                                        </address>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Capacidad :</strong> {{$usuario->maquinaria->capacidad}}
                                        </address>
                                        </li>
                                    <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Color :</strong> {{ucwords($usuario->maquinaria->color)}}
                                        </address>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Placa :</strong> {{$usuario->maquinaria->kilometraje}} km
                                        </address>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-view-list"></i>
                                        <address class="m-b-0 ng-binding">
                                            <strong>Pertenencia :</strong> {{$usuario->maquinaria->tipo}}
                                        </address>
                                    </li>
                                    @endif
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