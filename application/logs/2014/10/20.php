<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-20 01:42:15 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Welcome.php [ 67 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:67
2014-10-20 01:42:15 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(67): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 67, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_get_messages()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:67
2014-10-20 01:50:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\Welcome.php [ 59 ] in file:line
2014-10-20 01:50:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-20 01:50:23 --- CRITICAL: Kohana_Exception [ 0 ]: The username property does not exist in the Model_Message class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-20 01:50:23 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('username')
#1 C:\OpenServer\domains\test\application\views\header.php(35): Kohana_ORM->__get('username')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(63): Kohana_View->render()
#5 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_get_messages()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-20 01:50:37 --- CRITICAL: Kohana_Exception [ 0 ]: The username property does not exist in the Model_Message class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-20 01:50:37 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('username')
#1 C:\OpenServer\domains\test\application\views\header.php(35): Kohana_ORM->__get('username')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(63): Kohana_View->render()
#5 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_get_messages()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603