<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/header.php' ?>

<div class="panel panel-primary">
    <div class="pan"><p class="text-center"> Configuración De La Cuenta</p>
        <ul>
                     
                
                <h2>Cuenta</h2>
                <p><a href="evento.html.php">Modificar</a>
                <p><a href="#">Aqui va algo</a></p>
                <p><a href="#">Aqui va otro algo</a></p>
                <p><a href="#">Volver</a></p>
            
            
            
                
                <h2>Sitios</h2>
                <a href="<?php echo $fsConfig->getPath() ?>index.php/seguridad/sitioCrear">Crear Sitio</a>
                    <p><a href="#">Listar Sitio</a></p>
            
            
            
            
                <h2>Eventos</h2>
                <p><a href="#">Crear Evento</a></p> 
                <p><a href="#">Listar Evento</a></p>
                
                
                
                <h2>Categorias</h2>
                <p><a href="#">Crear Categoria</a></p>
                <p><a href="#">Editar Categoria</a></p>
        </ul>
    </div>
        
<div class="panelsito">
   
    <p>Creacion de un Sitio</p>                           
                        
    <form action="#" method="post"> 
        
        <li>Nombre del Sitio<br>
            <input type="text"></li>
        <br>
        <li>Descripcion del sitio<br>
            <textarea class="text-area"></textarea></li>
        <br>
        <li>Cargar Imagen<br>
            <input class="ymput" type="file"></li>
        <br>
        <button class="buttton" type="submit">Guardar</button> <button class="buttton" type="submit">Cancelar</button>
        
        
        
    </form>
</div>
    </div>


