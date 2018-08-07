<div class="row">
    <div class="col-sm-4">
        <div class="input-group">
                <span class="input-group-addon"><i class="zmdi zmdi-format-color-fill"></i></span>
                <div class="fg-line">
                    <label for=""><strong>Nombre del Contenedor : </strong></label>
                    {!!Form::text('capacidad',null,['class'=>'form-control','placeholder'=>'Nombre del Contenedor'])!!}
                </div>
            </div>

            <br>
            <br>
       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-format-color-fill"></i></span>
           <div class="fg-line">
               <label for=""><strong>Capacidad de Contenedor (en litros) : </strong></label>
               {!!Form::number('capacidad',null,['class'=>'form-control','placeholder'=>'Capacidad del Contenedor'])!!}
           </div>
       </div>

       <br>
       <br>

   </div>
    <div class="col-sm-4">
       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-money"></i></span>
           <div class="fg-line">
                <label for=""><strong>Proyecto a ser Destinado: </strong></label>
               {!!Form::select('proyecto',$proyectos,null,['class'=>'form-control'])!!}
           </div>
       </div>

       <br>
       <br>
   </div>
   <div class="col-sm-4">

        <div class="input-group">
                <span class="input-group-addon"><i class="zmdi zmdi-format-color-fill"></i></span>
                <div class="fg-line">
                    <label for=""><strong>Tipo de Combustible : </strong></label>
                    {!!Form::select('combustible_id',$combustibles,null,['class'=>'form-control'])!!}
                </div>
            </div>
            <br>
            <br>

   </div>
</div>