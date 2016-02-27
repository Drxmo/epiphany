<?php

use FStudio\fsController as controller;

/**
 * Description of categorias
 *
 * @author 
 */
class categorias extends controller {

    public function execute() {
        $config = $this->getConfig();

        $this->btCSS = $config->getUrl() . 'css/bootstrap.min.css';
        $this->bttCSS = $config->getUrl() . 'css/bootstrap-theme.min.css';
        $this->signinCSS = $config->getUrl() . 'css/signin.css';
        $this->jqJS = $config->getUrl() . 'css/jquery-1.11.3.min.js';
        $this->btJS = $config->getUrl() . 'css/bootstrap.min.js';
        $this->buscarForm = $config->getUrl() . 'index.php/home/busqueda';
        $this->homeURL = $config->getUrl() . 'index.php';
        $this->logoutURL = $config->getUrl() . 'index.php/seguridad/logout';
        $this->loginForm = $config->getUrl() . 'index.php/seguridad/login';
        $this->preLogin = $config->getUrl() . 'index.php/home/lista';
        $this->registroURL = $config->getUrl() . 'index.php/seguridad/registro';

            
        $this->defineView('home', 'categorias', 'html');
    }

}
