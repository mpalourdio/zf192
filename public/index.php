<?php
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));
define('APPLICATION_ENV', 'development');

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
date_default_timezone_set('Europe/Paris');

// mise en place des répertoires et chargement des classes
set_include_path(
    '.'
    . PATH_SEPARATOR . '../library'
    . PATH_SEPARATOR . '../'
    . PATH_SEPARATOR . '../application/models/'
    . PATH_SEPARATOR . get_include_path()
);

require_once 'Zend/Loader/Autoloader.php';
$loader = Zend_Loader_Autoloader::getInstance();
$loader->registerNamespace('Templates_');


// setup controller
$frontController = Zend_Controller_Front::getInstance();
$frontController->throwExceptions(true);
$frontController->setControllerDirectory('../application/controllers');

$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/config/application.ini'
);
$application->bootstrap()->run();
