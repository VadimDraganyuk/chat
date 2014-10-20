<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-19 14:43:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Welcome.php [ 28 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:28
2014-10-19 14:43:04 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 28, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(69): Controller_Welcome->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:28