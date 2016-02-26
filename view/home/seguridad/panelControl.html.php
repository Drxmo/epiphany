<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/header.php' ?>
    
    <div class="pan"><p class="text-center"> Configuración De La Cuenta</p>
        <ul>
                     
                
                <h2>Cuenta</h2>
                <p><a href="evento.html.php">Modificar</a>
                <p><a href="#">Aqui va algo</a></p>
                <p><a href="#">Aqui va otro algo</a></p>
                <p><a href="#">Volver</a></p>
            
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
                                    <ul class="dropdown-menu">

                                        <li><a href="<?php echo $fsConfig->getUrl() ?>index.php/home/categorias">Todas</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Editar Datos</a></li>
                                        <li role="separator" class="divider"></li>
                                        
                                        <li><a href="#">Cambiar contraseña</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Eliminar cuenta</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="<?php echo $logoutURL ?>">Cerrar Sesión</a></li>
                                        <li role="separator" class="divider"></li>
                                    </ul>
                                </li>
            
            
                
                <h2>Sitios</h2>
                <a href="<?php echo $fsConfig->getUrl() ?>index.php/seguridad/sitioCrear">Crear Sitio</a>
                    <p><a href="#">Listar Sitio</a></p>
            
            
            
            
                <h2>Eventos</h2>
                <p><a href="#">Crear Evento</a></p> 
                <p><a href="#">Listar Evento</a></p>
            
        </ul>
    </div>
        
<div class="panel panel-primary">
  <table class="tablon table-hover table-responsive">      
      <tbody>
          <tr class="active">      
              <td></td>
              <td><strong>TABLA CONTENIDO</strong></td>
              <td></td>
                
          </tr>
          
          <tr class="active">
              <td><strong>Sitio</strong></td>
              <td><strong>Descripcion</strong></td>
              <td><strong>Accion</strong></td>
          </tr>
          
          <tr>
              <td>Sendero Ecologico</td>
              <td>Disfruta de un delicioso paseo<br>
                  ecologico liberando tu mente</td>
              <td><a href="#"> Editar</a> 
                  <a href="#">Inhabilitar</a>
              
              </td>
              
              
          </tr>
          
          <tr>
              <td>Vergel</td>
              <td>Deporte y mirar nenas</td>
              <td>
                  <a href="#"> Editar</a> 
                  <a href="#">Inhabilitar</a>
              
              </td>
          </tr>
          
           <tr>
              <td>Misa Sanacion</td>
              <td>14 de cada mes se celebra esta misa en la basilica de Buga</td>
              <td>
                  <a href="#"> Editar</a> 
                  <a href="#">Inhabilitar</a>
              
              </td>
          </tr>
          
           <tr>
              <td>Vergel</td>
              <td>Deporte y mirar nenas</td>
              <td>
                  <a href="#"> Editar</a> 
                  <a href="#">Inhabilitar</a>
              
              </td>
          </tr>
          
      </tbody>
  </table>
    </div>

 
<?php include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>

