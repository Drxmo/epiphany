<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of index
 *
 * @author Drx
 */
class lista extends controller implements action{

    public function execute() {
        $config = $this->getConfig();
        if (isset($_SESSION['user']) === true) {
            $this->titulo = 'Agenda de ' . $_SESSION['user']['nombre'];
        }else{
            $this->titulo = 'Agenda';
            
        }
            
            $this->btCSS = $config->getUrl() . 'css/bootstrap.min.css';
            $this->bttCSS = $config->getUrl() . 'css/bootstrap-theme.min.css';
            $this->signinCSS = $config->getUrl() . 'css/signin.css';
            $this->jqJS = $config->getUrl() . 'css/jquery-1.11.3.min.js';
            $this->btJS = $config->getUrl() . 'css/bootstrap.min.js';
            $this->buscarForm = $config->getUrl() . 'index.php/home/buscar';
            $this->homeURL = $config->getUrl() . 'index.php';
            $this->loginForm = $config->getUrl() . 'index.php/seguridad/login';
            $this->preLogin = $config->getUrl() . 'index.php/home/lista';
            $this->registroURL = $config->getUrl() . 'index.php/seguridad/registro';
            $this->logoutURL = $config->getUrl() . 'index.php/home/seguridad/logout';           
            $this->defineView('home/seguridad', 'loginFormulario', 'html');
//            $this->defineView('home', 'index', 'html');
//    include '../../view/home/seguridad/loginUsuario.html.php';
        }
    }


