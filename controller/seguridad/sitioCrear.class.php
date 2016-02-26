<?php

use FStudio\fsController as controller;

/**
 * Description of sitioCrear
 *
 * @author
 */
class sitioCrear extends controller {

    public function execute() {
        $this->defineView('home/seguridad', 'createSitio', 'html');
    }

}
