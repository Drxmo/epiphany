<?php

use FStudio\fsController as controller;

/**
 * Description of categoriasDetalle
 *
 * @author
 */
class categoriasDetalle extends controller {

    public function execute() {
        $this->defineView('home', 'categoriasDetalle', 'html');
    }

}
