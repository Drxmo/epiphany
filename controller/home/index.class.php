<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index
 *
 * @author Drx
 */
class index extends controller implements action {

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
        if (isset($_SESSION['user']) === true) {
            $this->defineView('home', 'index', 'html');
//            $index = $config->getUrl() . 'index.php';
//            header("Location: $index");
//            exit();
        } else if ((isset($_SESSION['registroSuccess']) === true) or ( isset($_SESSION['usuarioInvalido']) === true)) {


//            $this->defineView('home/seguridad', 'loginFormulario', 'html');
            $this->defineView('home/seguridad', 'loginFormulario', 'html');
        } else {


            $this->defineView('home', 'index', 'html');
//    include '../../view/home/seguridad/loginUsuario.html.php';
        }
    }

}
