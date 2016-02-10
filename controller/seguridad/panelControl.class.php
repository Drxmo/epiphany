<?php

use FStudio\fsController as controller;

/**
 * Description of panelControl
 *
 * @author 
 */
class panelControl extends controller {

    public function execute() {
        $this->defineView('home/seguridad', 'panelControl', 'html');
    }

}
