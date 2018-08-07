<div class="row">
    <div class="col-sm-4">
       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-format-color-fill"></i></span>
           <div class="fg-line">
               <label for=""><strong>Nombre de Combustible : </strong></label>
               {!!Form::text('tipo',null,['class'=>'form-control','placeholder'=>'Nombre de Combustible'])!!}
           </div>
       </div>

       <br>
       <br>
   </div>
    <div class="col-sm-4">
       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-money"></i></span>
           <div class="fg-line">
                <label for=""><strong>Precio de Combustible: </strong></label>
               {!!Form::number('precio',null,['class'=>'form-control','placeholder'=>'Precio de Combustible'])!!}
           </div>
       </div>

       <br>
       <br>
   </div>
   <div class="col-sm-4">

        <div class="input-group">
            <span class="input-group-addon"><i class="zmdi zmdi-edit"></i></span>
            <div class="fg-line">
                <label for=""><strong>Descripcion de Combustible : </strong></label>
                {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion de Combustible','rows'=>3])!!}
            </div>
        </div>
        <br><br>

   </div>
</div>