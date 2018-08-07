@extends('panel.template-table')
@section('contenido')
{{$errors}}
 {!!Form::open(['route'=>'maquinarias.store','method'=>'POST','id'=>'formulario','files'=>true])!!}
    <div class="card">
        <div class="card-header">
           <div class="row">
           	<div class="col-sm-6">
           		<h2>Registrar Maquinaria</h2>
           	</div>
           	<div class="col-sm-6">
           		<div class="pull-right">
           			<div class="row">
           				<div class="col-sm-6">
           					<a href="{{route('maquinarias.index')}}" class="btn btn-default"  style="margin-top: 5px;"><i class="zmdi zmdi-chevron-left"></i> Cancelar</a>
           				</div>
           				<div class="col-sm-6">
           					<button type="submit" class="btn btn-primary"  style="margin-top: 5px;">Guardar <i class="zmdi zmdi-chevron-right"></i></button>
           				</div>
           			</div>
           			<br>
           		</div>
           	</div>
           </div>
        </div>
        <div class="card-body card-padding">
               @include('panel.maquinarias.form')
        </div>
    </div>
{!!Form::close()!!}
@stop
@section('script')
	{!! JsValidator::formRequest('App\Http\Requests\RequestMaquinariaCreate','#formulario')!!}
@stop