<?php

use Lamp\App;
use Lamp\Router;

// 自动加载
include '../vendor/autoload.php';

// 设置常量
const ROOT = __DIR__.'/..'.DIRECTORY_SEPARATOR;

App::init(ROOT);

// 处理异常
set_exception_handler(function ($class) {
    header('Content-Type:application/json');
    echo json_encode([
        'code'    => $class->getCode(),
        'message' => $class->getMessage(),
        'file'    => $class->getFile(),
        'line'    => $class->getLine(),
    ]);
    exit();
});

// 实现路由
[$module, $controller, $action] = Router::dispatch();

App::run($module, $controller, $action);
