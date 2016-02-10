<?php

use FStudio\myConfig as config;

$config = new config();

//$config->setPath('/var/www/html/epiphany/');
$config->setPath('C:/wamp/www/epiphany/');
//$config->setPath('C:/xampp/htdocs/epiphany/');
$config->setUrl('http://localhost/epiphany/web/');

$config->setDriver('mysql');
$config->setHost('localhost');
$config->setPort(3306);
$config->setDbName('tpsbuga2015');
$config->setUser('root');
$config->setPassword('');

$config->setDsn(
        $config->getDriver()
        . ':host=' . $config->getHost()
        . ';port=' . $config->getPort()
        . ';dbname=' . $config->getDbName()
);

$config->setSessionName('FStudio');

$config->setDefaultModule('home');
$config->setDefaultAction('index');

//$config->setPlugins(array(
//    'fsEjemplo1Plugin',
//    'fsEjemplo2Plugin',
//));
