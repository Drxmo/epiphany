<?php

use FStudio\fsController as controller;

/**
 * Description of categoriasDetalleUsuario
 *
 * @author 
 */
class categoriasDetalleUsuario extends controller {

    public function execute() {
        $this->defineView('home/usuario', 'categoriasDetalleUsuario', 'html');
    }

}
