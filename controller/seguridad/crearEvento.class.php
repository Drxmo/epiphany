<?php

require_once '../model/base/usuarioBaseTable.class.php';
require_once '../model/usuarioTable.class.php';
require_once '../model/base/datoUsuarioBaseTable.class.php';
require_once '../model/datoUsuarioTable.class.php';
require_once '../model/base/eventoBaseTable.class.php';
require_once '../model/eventoTable.class.php';


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

            $evento = new eventoTable($config);
            $evento->setId($evento->nextId());
            $evento->setCategoriaId($eventos['catId']);
            $evento->setEstadoId($eventos['estadoId']);
            $evento->setUsuarioId($eventos['usuId']);
            $evento->setNombre($eventos['nombre']);
            $evento->setFecha($eventos['fecha_hora']);
            $evento->setDescripcion($eventos['descripcion']);
            $evento->setDireccion($eventos['direccion']);
            $evento->setTelefono($eventos['telefono']);
            $evento->setLatitud($eventos['latitud']);
            $evento->setLongitud($eventos['longitud']);
            $evento->setFacebook($eventos['facebook']);
            $evento->setLatitud($eventos['twitter']);
            $evento->setLatitud($eventos['google_plus']);
            $evento->setLatitud($eventos['created_at']);
            $evento->setLatitud($eventos['updated_at']);
            $evento->setLatitud($eventos['deleted_at']);
            
            $evento->save();

//            $datoUsuario = new datoUsuarioTable($config);
//            $sitio->setUsuarioId($usuario->getId());
//            $datoUsuario->setNombre($registro['nombre']);
//            $datoUsuario->setApellidos($registro['apellidos']);
//            $datoUsuario->setCorreo($registro['email']);
//            $datoUsuario->setFechaNacimiento($registro['fecha']);
//            $datoUsuario->setGenero($registro['genero']);
//            $datoUsuario->setId($usuario->nextId());
//            $datoUsuario->save();
            $_SESSION['eventoSuccess'] = 'Evento registrado exitosamente';
        
        header("Location: $index");
        exit();
    }

    private function validateInsert($sitios) {
        
    }

}
