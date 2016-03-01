<?php

require_once '../model/base/usuarioBaseTable.class.php';
require_once '../model/usuarioTable.class.php';
require_once '../model/base/datoUsuarioBaseTable.class.php';
require_once '../model/datoUsuarioTable.class.php';
require_once '../model/base/sitioBaseTable.class.php';
require_once '../model/sitioTable.class.php';
require_once '../model/base/categoriaBaseTable.class.php';
require_once '../model/categoriaTable.class.php';


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;




class crearSitio extends controller implements action{

    public function execute() {
        $config = $this->getConfig();
        $index = $config->getUrl() . 'index.php';

//        if (isset($_SESSION['user']) === TRUE) {
//            header("Location: $index");
//            exit();
//        } elseif (filter_has_var(INPUT_POST, 'registro') === TRUE) {
//            $registro = filter_input_array(INPUT_POST)['registro'];

//      $this->validateInsert($registro);
$sitios = filter_input_array(INPUT_POST)['sitios'];
        
        
            $sitio = new sitioTable($config);
            $sitio->setId($sitio->nextId());
            $sitio->setCategoriaId($sitios['catId']);
            $sitio->setEstadoId($sitios['estadoId']);
            $sitio->setUsuarioId($sitios['usuId']);
            $sitio->setNombre($sitios['nombre']);
            $sitio->setDescripcion($sitios['descripcion']);
            $sitio->setDireccion($sitios['direccion']);
            $sitio->setTelefono($sitios['telefono']);
            $sitio->setLatitud($sitios['latitud']);
            $sitio->setLongitud($sitios['longitud']);
            $sitio->setFacebook($sitios['facebook']);
            $sitio->setTwitter($sitios['twitter']);
            $sitio->setGooglePlus($sitios['google']);
//            $sitio->setCreatedAt($sitios['created_at']);
//            $sitio->setUpdatedAt($sitios['updated_at']);
//            $sitio->setDeletedAt($sitios['deleted_at']);
//            
            $sitio->save();
            
            $categoria = new sitioTable($config);
            
            
            $categoria->save();
            

//            $datoUsuario = new datoUsuarioTable($config);
//            $sitio->setUsuarioId($usuario->getId());
//            $datoUsuario->setNombre($registro['nombre']);
//            $datoUsuario->setApellidos($registro['apellidos']);
//            $datoUsuario->setCorreo($registro['email']);
//            $datoUsuario->setFechaNacimiento($registro['fecha']);
//            $datoUsuario->setGenero($registro['genero']);
//            $datoUsuario->setId($usuario->nextId());
//            $datoUsuario->save();
            $_SESSION['sitiosSuccess'] = 'Sitio registrado exitosamente';
        
        header("Location: $index");
        exit();
    }

    private function validateInsert($sitios) {
        
    }

}
