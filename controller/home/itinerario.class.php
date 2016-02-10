<?php

use FStudio\fsController as controller;

/**
 * Description of itinerario
 *
 * @author 
 */
class itinerario extends controller {

    public function execute() {
        $this->defineView('home/usuario', 'itinerario', 'html');
    }

}
