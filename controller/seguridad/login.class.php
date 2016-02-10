<?php

require_once '../model/base/usuarioBaseTable.class.php';
require_once '../model/usuarioTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of login
 *
 * @author TPS DRX
 */
class login extends controller implements action {

    public function execute() {
        $config = $this->getConfig();
        if (filter_has_var(INPUT_POST, 'seguridad') === TRUE) {
            $user = filter_input_array(INPUT_POST)['seguridad']['user'];
            $password = filter_input_array(INPUT_POST)['seguridad']['pass'];

            $usuario = new usuarioTable($config);
            $usuario->setUsuario($user);
            $usuario->setPassword($password);

            if ($id= $usuario->verificarUsuario() === true) {
                echo "bien hecho";
                $datoUsuario = $usuario->getById($id); //getDataByUserPassword();
                if ($datoUsuario != false) {
                    $_SESSION['user']['id'] = $datoUsuario->id;
                    $_SESSION['user']['nombre'] = $datoUsuario->nombre;
                    header("Location:" . $config->getUrl() . "index.php");
                    exit();
                } else {
                    echo "Mal hecho";
//                    throw new Exception('Ocurrio un error usuario no existente');
                }
            } else {
                echo "Mal hecho";
                $ind = $iddd;
                $_SESSION['usuarioInvalido'] = 'Datos de usuario son inválidos ';
            }
        }
        $index = $config->getUrl() . 'index.php';
        header("Location: $index");
        exit();
    }

}
