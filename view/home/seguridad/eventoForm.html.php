<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>

  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '1900:currentYear',
       minDate: new Date('1900/01/01'),
      maxDate: '0',
       dateFormat: 'yy-mm-dd'
    });
  });
  
//  $(function() {
//    $( "#datepicker" ).datepicker();
//    $( "#format" ).change(function() {
//      $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
//    });
//  });
//  
//   $('#datepicker').datepicker({
//        minDate: new Date(currentYear, currentMonth, currentDate),
//        dateFormat: 'yy-mm-dd'
//    });
  </script>

 



<section class="main container regcontainer">
    <div class="row">
        <div class="jumbotron boxuser boxuserX">
            <form class="form-horizontal" action="<?php echo $fsConfig->getUrl() ?>index.php/seguridad/crearEvento" method="post">
                <div class="form-group">
                    <label class="control-label col-xs-3">Evento_id:</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="eve_id" placeholder="eve_id" name="eventos[evento_id]">
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Usuario_id:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="usu_id" placeholder="usu_id" name="eventos[usuario_id]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Categoria_id:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="cat_id" placeholder="Apellido" name="eventos[categoria_id]">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-xs-3">Evento_nombre:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_nombre" placeholder="eve_nombre" name="eventos[nombre]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Evento_fecha_hora:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_fecha_hora" placeholder="eve_fecha_hora" name="eventos[fecha_hora]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Evento_Direccion:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_dir" placeholder="Direccion" name="eventos[direccion]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Evento_nombre_contacto:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_nombre_contacto" placeholder="nombre_contacto" name="eventos[nombre_contacto]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Evento_correo_contacto:</label>
                        <div class="col-xs-9">
                            <input type="email" class="form-control" id="eve_correo_contacto" placeholder="email_contactp" name="eventos[evento_correo_contacto]">
                        </div>
                    </div>
                   <div class="form-group">
                        <label class="control-label col-xs-3">Evento_telefono_contacto:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_telofono_contacto" placeholder="telefono_contacto" name="eventos[evento_telefono_contacto]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Evento_valor_boleta:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_valor_boleta" placeholder="vallor_boleta" name="eventos[evento_valor_boelta]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Evento_latitud:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_latitud" placeholder="latitud" name="eventos[evento_latitud]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Evento_longitud:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_longitud" placeholder="longitud" name="eventos[evento_longitud]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">fecha_inicio_publicacion</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="fec_inicio_publicacion" placeholder="inicio_publiccacion" name="eventos[fecha_inicio_publicacion]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">fecha_fin_publicacion:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="fec_fin_publicacion" placeholder="fin_publicacion" name="eventos[fecha_fin_publicacion]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Estado_id:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="est_id" placeholder="estado_id" name="eventos[estado_id]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">evento_created_at:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_created_at" placeholder="eve_created" name="eventos[evento_created_at]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">evento_updated_at:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_update_at" placeholder="eve_update" name="eventos[evento_updated_at]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">evento_deleted_at:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_deleted_at" placeholder="eve_deleted" name="eventos[evento_deleted_at]">
                        </div>
                    </div>
                    
                    
                   
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <label class="checkbox-inline">
<!--                                <input type="checkbox" value="news">Desea recibir notificaciones.
                            </label>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <label class="checkbox-inline">
                                
<!--                                <input type="checkbox" value="agree">Acepta <a href="#">los terminos y condiciones</a>.-->
                                
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-default" value="Registrar">
                            <a href="<?php echo $fsConfig->getUrl() ?>index.php/home/index" class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</section>

<?php include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>
