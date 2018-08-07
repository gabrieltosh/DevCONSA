<div class="row">
    <div class="col-sm-4">
       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
           <div class="fg-line">
               <label for=""><strong>Nombres : </strong></label>
               {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombres'])!!}
           </div>
       </div>

       <br>
       <br>

       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
           <div class="fg-line">
                <label for=""><strong>Apellidos : </strong></label>
               {!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellidos'])!!}
           </div>
       </div>

       <br>
       <br>

       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-account-box-phone"></i></span>
           <div class="fg-line">
                <label for=""><strong>Carnet de Identidad : </strong></label>
               {!!Form::number('ci',null,['class'=>'form-control','placeholder'=>'Carnet de Identidad'])!!}
            </div>

       </div>

       <br>
       <br>

       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
           <div class="fg-line">
                <label for=""><strong>Correo Electronico : </strong></label>
               {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Correo Electronico'])!!}
           </div>
       </div>
       <br>
       <br>
       <div class="input-group">
            <span class="input-group-addon"><i class="zmdi zmdi-assignment-account"></i></span>
            <div class="fg-line">
                 <label for=""><strong>Cargo : </strong></label>
                {!!Form::text('cargo',null,['class'=>'form-control','placeholder'=>'Cargo en la Empresa'])!!}
            </div>
        </div>
   </div>
    <div class="col-sm-4">
        <div class="input-group">
            <span class="input-group-addon"><i class="zmdi zmdi-cake"></i></span>
            <div class="fg-line">
                <label for=""><strong>Fecha de Nacimiento : </strong></label>
                {!!Form::date('nacimiento',null,['class'=>'form-control','placeholder'=>'Fecha de Nacimiento'])!!}
            </div>
        </div>
        <br>
        <br>

       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
           <div class="fg-line">
                <label for=""><strong>Direccion : </strong></label>
               {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Direccion'])!!}
           </div>
       </div>

       <br>
       <br>

       <div class="input-group ">
           <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
           <div class="fg-line">
                <label for=""><strong>Telefono : </strong></label>
               {!!Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Telefono'])!!}
           </div>
       </div>

       <br>
       <br>

       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-key"></i></span>
           <div class="fg-line">
                <label for=""><strong>Contraseña : </strong></label>
               {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña'])!!}

           </div>
       </div>

       <br>
       <br>

       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-key"></i></span>
           <div class="fg-line">
                <label for=""><strong>Confirmar Contraseña : </strong></label>
               {!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Confirmar Contraseña'])!!}
           </div>
       </div>
   </div>
   <div class="col-sm-4">
        <div class="input-group">
            <span class="input-group-addon"><i class="zmdi zmdi-male-female"></i></span>
            <div class="fg-line">
                <label for=""><strong>Genero : </strong></label>
                <select name="genero" id="" class="form-control">
                    @if(isset($usuario))
                    <option {{$usuario->genero == 'femenino' ? ' selected' : ''}}  value="femenino">Femenino</option>
                    <option {{$usuario->genero == 'masculino' ? ' selected' : ''}} value="masculino">Masculino</option>
                    @else
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                    @endif
                </select>
            </div>
        </div>
       <br><br>
       @if(isset($maquinarias))
       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-pin-drop"></i></span>
           <div class="fg-line">
                <label for=""><strong>Seleccionar Maquinaria : </strong></label>
               <div class="select">
                   {!!Form::select('maquinaria_id',$maquinarias,null,['class'=>'chosen'])!!}
               </div>
           </div>
       </div>
       <br>
       <br>
       @endif
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