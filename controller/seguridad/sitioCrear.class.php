<?php

use FStudio\fsController as controller;

/**
 * Description of sitioCrear
 *
 * @author DRX
 */
class sitioCrear extends controller {

    public function execute() {
        
        $this->defineView('home/seguridad', 'sitioForm', 'html');
    }

}
