<div class="modal fade" id="modal-show-{{$proyecto->id}}" style="display: none;">
        <div class="modal-dialog ">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Datos de proyecto</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header ch-alt">
                        <h2>Datos Personales de {{ucwords($proyecto->nombre)}}</h2>
                    </div>
                    <div class="card-body card-padding">
                        <div class="pmo-contact">
                            <ul>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Fecha de Contrato : </strong>{{ucwords($proyecto->fechaContrato)}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Fecha Proceder : </strong>{{ucwords($proyecto->fechaProceder)}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Fecha de Finalizacion : </strong>{{ucwords($proyecto->time)}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Monto del Contrato : </strong>Bs {{$proyecto->monto}}
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Plazo de Contrato: </strong>{{ucwords($proyecto->plazo)}} meses
                                </li>
                                <li class="ng-binding"><i class="zmdi zmdi-view-list"></i>
                                    <strong>Fecha para Proceder : </strong>{{$proyecto->fechaProceder}}
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