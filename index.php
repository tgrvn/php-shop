<?php

/* константа которая ограничивает доступ 
к файлам до выполнения файла index.php */
define('VG_ACCESS', true);

header('Content-Type:text/html;charset=utf-8');
session_start();

// файл отработал
require_once 'config.php';
require_once 'core/base/settings/internal_settings.php';

use core\base\exceptions\RouteException;
use core\base\controllers\RouteController;


try {
    RouteController::getInstance();
} catch (RouteException $e) {
    exit($e->getMessage());
}
