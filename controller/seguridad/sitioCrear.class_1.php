<?php

use FStudio\fsController as controller;

/**
 * Description of sitioCrear
 *
 * @author DRX
 */
class eventoCrear extends controller {

    public function execute() {
        
        $this->defineView('home/seguridad', 'eventoForm', 'html');
    }

}
