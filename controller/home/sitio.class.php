<?php

use FStudio\fsController as controller;

/**
 * Description of sitios
 *
 * @author 
 */
class sitio extends controller {

    public function execute() {
        $this->defineView('home', 'sitio', 'html');
    }

}
