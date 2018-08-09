@extends('panel.template-cards')
@section('contenido')
<div class="card">
    <div class="card-header">
        <div class="col-sm-12 text-center">
            <h2>PROYECTOS DE USUARIO</h2>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-6">
                {!!Form::open(['route'=>'consumoBuscar','method'=>'POST'])!!}
                <div class="input-group">
                    <input type="text" name="buscar" value="{{isset($value) ? $value : ''}}" class="form-control" placeholder="Buscar Proyecto">
                    <span class="input-group-btn">
                    <button class="btn btn-info" type="submit"><i class="zmdi zmdi-search"></i> Buscar</button>
                    </span>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach ($proyectos as $proyecto)
        <div class="col-md-4 col-sm-6">
            <div class="card animation-demo">
                <div class="card-header">
                    <div class="row">
                        <h2>{{$proyecto->nombre}}</h2>
                    </div>
                    <div class="row">
                            <button class="btn btn-xs btn-success">N° de Contrato : {{$proyecto->numeroContrato}}</button>
                        </div>
                </div>
                <div class="card-body">
                    <img src="{{asset('img/headers/sm/2.png')}}" alt="">

                </div>
                <div class="card-footer">
                    <a href="{{route('consumo',$proyecto->id)}}" class="btn btn-info">Verificar Consumo</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@stop