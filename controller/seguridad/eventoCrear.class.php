<?php



use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of categorias
 *
 * @author balem
 */

class eventoCrear extends controller {

    public function execute() {
        
        $config = $this->getConfig();
//        if (isset($_SESSION['user']) === true) {
//            $index = $config->getUrl() . 'index.php';
//            header("Location: $index");
//            exit();
//        } else {
//            
            $this->btCSS = $config->getUrl() . 'css/bootstrap.min.css';
            $this->bttCSS = $config->getUrl() . 'css/bootstrap-theme.min.css';
            $this->signinCSS = $config->getUrl() . 'css/signin.css';
            $this->jqJS = $config->getUrl() . 'css/jquery-1.11.3.min.js';
            $this->btJS = $config->getUrl() . 'css/bootstrap.min.js';
            $this->registroForm = $config->getUrl() . 'index.php/seguridad/registrar';
            $this->homeURL = $config->getUrl() . 'index.php';
            $this->registroURL = $config->getUrl() . 'index.php/seguridad/registro';

          $this->defineView('home/seguridad', 'eventoForm', 'html');
           
      
    }

}        

