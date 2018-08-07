<div class="row">
    <div class="col-sm-4">
       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-card"></i></span>
           <div class="fg-line">
               <label for=""><strong>Placa de Maquinaria: </strong></label>
               {!!Form::text('placa',null,['class'=>'form-control','placeholder'=>'Placa'])!!}
           </div>
       </div>

       <br>
       <br>

       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-bus"></i></span>
           <div class="fg-line">
                <label for=""><strong>Modelo de Maquinaria: </strong></label>
               {!!Form::text('modelo',null,['class'=>'form-control','placeholder'=>'modelo'])!!}
           </div>
       </div>

       <br>
       <br>

       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
           <div class="fg-line">
                <label for=""><strong>Color de Maquinaria : </strong></label>
               {!!Form::text('color',null,['class'=>'form-control','placeholder'=>'Color de Maquinaria'])!!}
            </div>

       </div>

       <br>
       <br>

       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-bookmark"></i></span>
           <div class="fg-line">
                <label for=""><strong>Marca de Maquinaria: </strong></label>
               {!!Form::text('marca',null,['class'=>'form-control','placeholder'=>'Marca de Maquinaria'])!!}
           </div>
       </div>
   </div>
    <div class="col-sm-4">
        <div class="input-group">
            <span class="input-group-addon"><i class="zmdi zmdi-trending-up"></i></span>
            <div class="fg-line">
                <label for=""><strong>Kilometraje Recorrido : </strong></label>
                {!!Form::number('kilometraje',null,['class'=>'form-control','placeholder'=>'Kilometraje Recorrido'])!!}
            </div>
        </div>
        <br>
        <br>

       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-time-countdown"></i></span>
           <div class="fg-line">
                <label for=""><strong>Capacidad de Maquinaria: </strong></label>
               {!!Form::text('capacidad',null,['class'=>'form-control','placeholder'=>'Capacidad de Maquinaria'])!!}
           </div>
       </div>

       <br>
       <br>

       <div class="input-group ">
           <span class="input-group-addon"><i class="zmdi zmdi-edit"></i></span>
           <div class="fg-line">
                <label for=""><strong>Detalle de Maquinaria : </strong></label>
               {!!Form::text('detalle',null,['class'=>'form-control','placeholder'=>'Detalle de Maquinaria'])!!}
           </div>
       </div>

       <br>
       <br>

       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-hdr-strong"></i></span>
           <div class="fg-line">
                <label for=""><strong>Tipo de Maquinaria : </strong></label>
                <select name="tipo" id="" class="form-control">
                    @if(isset($maquinaria))
                    <option {{$maquinaria->tipo == 'alquilado' ? 'selected' : ''}}value="alquilado">Alquilado</option>
                    <option {{$maquinaria->tipo == 'propio' ? 'selected' : ''}} value="propio">Propio</option>
                    @else
                    <option value="alquilado">Alquilado</option>
                    <option value="propio">Propio</option>
                    @endif
                </select>
           </div>
       </div>
   </div>
   <div class="col-sm-4">
        <div class="input-group">
             <span class="input-group-addon"><i class="zmdi zmdi-equalizer"></i></span>
             <div class="fg-line">
                  <label for=""><strong>Tipo de Combustible : </strong></label>
                 {!!Form::select('combustible_id',$combustibles,null,['class'=>'form-control'])!!}
             </div>
         </div>
         <br><br>
       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-image"></i></span>
           <div class="fg-line">
                <label for=""><strong>Seleccionar Imagen : </strong></label>
               <div class="fileinput fileinput-new" data-provides="fileinput">
                   <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                   <div>
                       <span class="btn btn-info btn-file">
                           <span class="fileinput-new">Seleccionar Imagen</span>
                           <span class="fileinput-exists">Cambiar</span>
                           {!!Form::file('imagen')!!}
                       </span>
                       <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Quitar</a>
                   </div>
               </div>
           </div>
       </div>

   </div>
</div>