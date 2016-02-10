<?php

use FStudio\fsController as controller;

/**
 * Description of busqueda
 *
 * @author 
 */
class busqueda extends controller {

    public function execute() {
        $this->defineView('home', 'busqueda', 'html');
    }

}
