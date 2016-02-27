<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/header.php' ?>


<section class="main container regcontainer">
    <div class="row">
        <div class="jumbotron boxuser boxuserX">
            <form class="form-horizontal" action="#" method="post">
                <div class="form-group">
                    <label class="control-label col-xs-3">Nombre Sitio:</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="nombre" name="registro[nombre]">
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Descripcion Sitio</label>
                        <div class="col-xs-9">
                            <textarea class="form-control" id="descripcionSitio" name="registro[descripcion]"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Direccion Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="direccionSitio" name="registro[direccion]">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-xs-3">Telefono Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="telefonoSitio" name="registro[telefono]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Latitud Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="latitudSitio" name="registro[latitud]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Longitud Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="longitudSitio" name="registro[longitud]">
                        </div>
                    </div>                             
                    <div class="form-group">
                        <label class="control-label col-xs-3">Facebook Sitio</label>
                        <div class="col-xs-6">
                         
                            <input type="text" class="form-control" id="facebookSitio" name="registro[facebook]">    
                            </div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Twitter Sitio</label>
                         <div class="col-xs-6">
                         
                            <input type="text" class="form-control" id="twitterSitio" name="registro[twitter]">    
                        </div>
                        
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3">Google Sitio</label>
                         <div class="col-xs-6">
                         
                            <input type="text" class="form-control" id="googleSitio" name="registro[google]">    
                        </div>
                        
                    </div>
                 
                    <div class="form-group">
                        <label class="control-label col-xs-3">Cargar Imagen</label>
                        <div class="col-xs-6">
                         
                            <input type="file" id="imgSitio" name="registro[img]">    
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
