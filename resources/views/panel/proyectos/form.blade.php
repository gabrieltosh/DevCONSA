<div class="row">
    <div class="col-sm-4">
       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-attachment"></i></span>
           <div class="fg-line">
               <label for=""><strong>Nombre de Proyecto : </strong></label>
               {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre de Proyecto'])!!}
           </div>
       </div>

       <br>
       <br>

       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-format-valign-center"></i></span>
           <div class="fg-line">
                <label for=""><strong>Longitud de Proyecto (en kilometros) : </strong></label>
               {!!Form::number('longitud',null,['class'=>'form-control','placeholder'=>'Longitud de Proyecto'])!!}
           </div>
       </div>

       <br>
       <br>

       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-collection-item"></i></span>
           <div class="fg-line">
                <label for=""><strong>N° de Contrato : </strong></label>
               {!!Form::text('numeroContrato',null,['class'=>'form-control','placeholder'=>'N° de Contrato'])!!}
            </div>

       </div>

       <br>
       <br>
   </div>
    <div class="col-sm-4">
        <div class="input-group">
            <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
            <div class="fg-line">
                <label for=""><strong>Fecha de Contrato : </strong></label>
                {!!Form::date('fechaContrato',null,['class'=>'form-control','placeholder'=>'Fecha de Contrato'])!!}
            </div>
        </div>
        <br>
        <br>

       <div class="input-group">
           <span class="input-group-addon"><i class="zmdi zmdi-money"></i></span>
           <div class="fg-line">
                <label for=""><strong>Monto del Proyecto : </strong></label>
               {!!Form::number('monto',null,['class'=>'form-control','placeholder'=>'Monto del Proyecto'])!!}
           </div>
       </div>

       <br>
       <br>

       <div class="input-group ">
           <span class="input-group-addon"><i class="zmdi zmdi-time"></i></span>
           <div class="fg-line">
                <label for=""><strong>Plazo Proyecto (en meses): </strong></label>
               {!!Form::number('plazo',null,['class'=>'form-control','placeholder'=>'Plazo del Proyecto'])!!}
           </div>
       </div>

       <br>
       <br>

   </div>
   <div class="col-sm-4">
        <div class="input-group">
            <span class="input-group-addon"><i class="zmdi zmdi-calendar-check"></i></span>
            <div class="fg-line">
                <label for=""><strong>Fecha para Proceder : </strong></label>
                {!!Form::date('fechaProceder',null,['class'=>'form-control','placeholder'=>'Fecha para Proceder'])!!}
            </div>
        </div>
        <br>
        <br>

   </div>
</div>