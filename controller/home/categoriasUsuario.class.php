<?php

use FStudio\fsController as controller;

/**
 * Description of categoriasUsuario
 *
 * @author 
 */
class categoriasUsuario extends controller {

    public function execute() {
        $this->defineView('home/usuario', 'categoriasUsuario', 'html');
    }

}
