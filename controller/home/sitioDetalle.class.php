<?php

use FStudio\fsController as controller;

/**
 * Description of sitioDetalle
 *
 * @author 
 */
class sitioDetalle extends controller {

    public function execute() {
        $this->defineView('home', 'sitioDetalle', 'html');
    }

}
