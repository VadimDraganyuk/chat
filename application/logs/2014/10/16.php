<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-16 01:35:04 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Secret_User::$model ~ APPPATH\classes\Controller\secret\user.php [ 14 ] in C:\OpenServer\domains\test\application\classes\Controller\secret\user.php:14
2014-10-16 01:35:04 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\secret\user.php:14
2014-10-16 01:42:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Secret_User::url() ~ APPPATH\classes\Controller\secret\base.php [ 23 ] in file:line
2014-10-16 01:42:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 01:44:09 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Secret_User::$model ~ APPPATH\classes\Controller\secret\user.php [ 14 ] in C:\OpenServer\domains\test\application\classes\Controller\secret\user.php:14
2014-10-16 01:44:09 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\secret\user.php:14
2014-10-16 01:56:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-16 01:56:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 01:57:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-16 01:57:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 02:02:44 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Secret_User::$times ~ APPPATH\classes\Controller\secret\user.php [ 21 ] in C:\OpenServer\domains\test\application\classes\Controller\secret\user.php:21
2014-10-16 02:02:44 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 21, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\secret\user.php:21
2014-10-16 02:03:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\secret\user.php [ 23 ] in C:\OpenServer\domains\test\application\classes\Controller\secret\user.php:23
2014-10-16 02:03:45 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 23, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\secret\user.php:23
2014-10-16 02:03:47 --- CRITICAL: View_Exception [ 0 ]: The requested view secret/banner/add could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-10-16 02:03:47 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\View.php(137): Kohana_View->set_filename('secret/banner/a...')
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(30): Kohana_View->__construct('secret/banner/a...', NULL)
#2 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(22): Kohana_View::factory('secret/banner/a...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-10-16 02:06:15 --- CRITICAL: View_Exception [ 0 ]: The requested view secret/banner/add could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-10-16 02:06:15 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\View.php(137): Kohana_View->set_filename('secret/banner/a...')
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(30): Kohana_View->__construct('secret/banner/a...', NULL)
#2 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(22): Kohana_View::factory('secret/banner/a...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-10-16 02:06:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sizes ~ APPPATH\views\secret\users\add.php [ 100 ] in C:\OpenServer\domains\test\application\views\secret\users\add.php:100
2014-10-16 02:06:17 --- DEBUG: #0 C:\OpenServer\domains\test\application\views\secret\users\add.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 100, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\test\application\views\secret\base.php(41): Kohana_View->__toString()
#5 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\test\application\classes\Controller\secret\base.php(48): Kohana_Controller_Template->after()
#9 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(135): Controller_Secret_Base->after()
#10 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Secret_User->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\test\application\views\secret\users\add.php:100
2014-10-16 02:38:04 --- CRITICAL: View_Exception [ 0 ]: The requested view secret/banner/add could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-10-16 02:38:04 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\View.php(137): Kohana_View->set_filename('secret/banner/a...')
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(30): Kohana_View->__construct('secret/banner/a...', Array)
#2 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(32): Kohana_View::factory('secret/banner/a...', Array)
#3 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-10-16 02:38:18 --- CRITICAL: View_Exception [ 0 ]: The requested view secret/banner/add could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-10-16 02:38:18 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\View.php(137): Kohana_View->set_filename('secret/banner/a...')
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(30): Kohana_View->__construct('secret/banner/a...', Array)
#2 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(32): Kohana_View::factory('secret/banner/a...', Array)
#3 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-10-16 02:40:31 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in C:\OpenServer\domains\test\application\classes\Controller\secret\user.php on line 32 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in C:\OpenServer\domains\test\system\classes\Kohana\View.php:28
2014-10-16 02:40:31 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\OpenServer\d...', 28, Array)
#1 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(32): Kohana_View::factory('secret/users/ad...', Object(Model_User))
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\system\classes\Kohana\View.php:28
2014-10-16 02:41:11 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in C:\OpenServer\domains\test\application\classes\Controller\secret\user.php on line 32 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in C:\OpenServer\domains\test\system\classes\Kohana\View.php:28
2014-10-16 02:41:11 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\OpenServer\d...', 28, Array)
#1 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(32): Kohana_View::factory('secret/users/ad...', Object(Database_MySQL_Result))
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\system\classes\Kohana\View.php:28
2014-10-16 02:41:13 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in C:\OpenServer\domains\test\application\classes\Controller\secret\user.php on line 32 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in C:\OpenServer\domains\test\system\classes\Kohana\View.php:28
2014-10-16 02:41:13 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\OpenServer\d...', 28, Array)
#1 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(32): Kohana_View::factory('secret/users/ad...', Object(Database_MySQL_Result))
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\system\classes\Kohana\View.php:28
2014-10-16 02:41:24 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in C:\OpenServer\domains\test\application\classes\Controller\secret\user.php on line 32 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in C:\OpenServer\domains\test\system\classes\Kohana\View.php:28
2014-10-16 02:41:24 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\OpenServer\d...', 28, Array)
#1 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(32): Kohana_View::factory('secret/users/ad...', Object(Database_MySQL_Result))
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\system\classes\Kohana\View.php:28
2014-10-16 02:52:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\secret\user.php [ 85 ] in file:line
2014-10-16 02:52:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 02:52:24 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:1302
2014-10-16 02:52:24 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(75): Kohana_ORM->create()
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:1302
2014-10-16 02:57:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\secret\user.php [ 98 ] in file:line
2014-10-16 02:57:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 02:58:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\secret\user.php [ 96 ] in file:line
2014-10-16 02:58:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 02:58:53 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 15 ] in C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php:15
2014-10-16 02:58:53 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php(15): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 15, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\HTTP.php(33): Kohana_HTTP_Exception::factory(Array)
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(127): Kohana_HTTP::redirect('/secret/user/ad...', Array)
#3 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(96): Kohana_Controller::redirect('/secret/user/ad...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php:15
2014-10-16 02:59:21 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 15 ] in C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php:15
2014-10-16 02:59:21 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php(15): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 15, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\HTTP.php(33): Kohana_HTTP_Exception::factory(Array)
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(127): Kohana_HTTP::redirect('/secret/user/ad...', Array)
#3 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(96): Kohana_Controller::redirect('/secret/user/ad...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php:15
2014-10-16 02:59:38 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 15 ] in C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php:15
2014-10-16 02:59:38 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php(15): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 15, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\HTTP.php(33): Kohana_HTTP_Exception::factory(Array)
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(127): Kohana_HTTP::redirect('/secret/user/ad...', Array)
#3 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(96): Kohana_Controller::redirect('/secret/user/ad...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php:15
2014-10-16 03:00:01 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 15 ] in C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php:15
2014-10-16 03:00:01 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php(15): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 15, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\HTTP.php(33): Kohana_HTTP_Exception::factory(Array)
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(127): Kohana_HTTP::redirect('/secret/user/ad...', Array)
#3 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(96): Kohana_Controller::redirect('/secret/user/ad...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php:15
2014-10-16 03:00:14 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 15 ] in C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php:15
2014-10-16 03:00:14 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php(15): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 15, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\HTTP.php(33): Kohana_HTTP_Exception::factory(Array)
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(127): Kohana_HTTP::redirect('/secret/user/ad...', Array)
#3 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(96): Kohana_Controller::redirect('/secret/user/ad...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php:15
2014-10-16 03:00:45 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 15 ] in C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php:15
2014-10-16 03:00:45 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php(15): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 15, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\HTTP.php(33): Kohana_HTTP_Exception::factory(Array)
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(127): Kohana_HTTP::redirect('/secret/users/a...', Array)
#3 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(96): Kohana_Controller::redirect('/secret/users/a...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php:15
2014-10-16 03:00:48 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 15 ] in C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php:15
2014-10-16 03:00:48 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php(15): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 15, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\HTTP.php(33): Kohana_HTTP_Exception::factory(Array)
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(127): Kohana_HTTP::redirect('/secret/users/a...', Array)
#3 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(96): Kohana_Controller::redirect('/secret/users/a...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\test\system\classes\Kohana\HTTP\Exception.php:15
2014-10-16 03:02:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\secret\index.php [ 70 ] in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 03:02:04 --- DEBUG: #0 C:\OpenServer\domains\test\application\views\secret\index.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 70, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\test\application\views\secret\base.php(41): Kohana_View->__toString()
#5 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\test\application\classes\Controller\secret\base.php(48): Kohana_Controller_Template->after()
#9 C:\OpenServer\domains\test\application\classes\Controller\secret\index.php(29): Controller_Secret_Base->after()
#10 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Secret_Index->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_Index))
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 03:06:02 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\secret\users\add.php [ 35 ] in C:\OpenServer\domains\test\application\views\secret\users\add.php:35
2014-10-16 03:06:02 --- DEBUG: #0 C:\OpenServer\domains\test\application\views\secret\users\add.php(35): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 35, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\test\application\views\secret\base.php(41): Kohana_View->__toString()
#5 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\test\application\classes\Controller\secret\base.php(48): Kohana_Controller_Template->after()
#9 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(144): Controller_Secret_Base->after()
#10 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Secret_User->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\test\application\views\secret\users\add.php:35
2014-10-16 03:15:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\secret\index.php [ 70 ] in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 03:15:51 --- DEBUG: #0 C:\OpenServer\domains\test\application\views\secret\index.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 70, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\test\application\views\secret\base.php(41): Kohana_View->__toString()
#5 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\test\application\classes\Controller\secret\base.php(48): Kohana_Controller_Template->after()
#9 C:\OpenServer\domains\test\application\classes\Controller\secret\index.php(29): Controller_Secret_Base->after()
#10 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Secret_Index->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_Index))
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 03:15:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\secret\index.php [ 70 ] in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 03:15:58 --- DEBUG: #0 C:\OpenServer\domains\test\application\views\secret\index.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 70, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\test\application\views\secret\base.php(41): Kohana_View->__toString()
#5 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\test\application\classes\Controller\secret\base.php(48): Kohana_Controller_Template->after()
#9 C:\OpenServer\domains\test\application\classes\Controller\secret\index.php(29): Controller_Secret_Base->after()
#10 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Secret_Index->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_Index))
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 03:16:36 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(/content/users_avatar/baf790d4bb7bd92090f8e513d1c14b971413447396.png): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\secret\user.php [ 56 ] in file:line
2014-10-16 03:16:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\OpenServer\d...', 56, Array)
#1 C:\OpenServer\domains\test\application\classes\Controller\secret\user.php(56): move_uploaded_file('C:\OpenServer\u...', '/content/users_...')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Secret_User->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_User))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-16 03:27:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\secret\index.php [ 70 ] in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 03:27:18 --- DEBUG: #0 C:\OpenServer\domains\test\application\views\secret\index.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 70, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\test\application\views\secret\base.php(41): Kohana_View->__toString()
#5 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\test\application\classes\Controller\secret\base.php(48): Kohana_Controller_Template->after()
#9 C:\OpenServer\domains\test\application\classes\Controller\secret\index.php(29): Controller_Secret_Base->after()
#10 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Secret_Index->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_Index))
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 03:30:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\secret\index.php [ 70 ] in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 03:30:49 --- DEBUG: #0 C:\OpenServer\domains\test\application\views\secret\index.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 70, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\test\application\views\secret\base.php(41): Kohana_View->__toString()
#5 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\test\application\classes\Controller\secret\base.php(48): Kohana_Controller_Template->after()
#9 C:\OpenServer\domains\test\application\classes\Controller\secret\index.php(30): Controller_Secret_Base->after()
#10 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Secret_Index->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_Index))
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 03:32:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\secret\index.php [ 70 ] in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 03:32:11 --- DEBUG: #0 C:\OpenServer\domains\test\application\views\secret\index.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 70, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\test\application\views\secret\base.php(41): Kohana_View->__toString()
#5 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\test\application\classes\Controller\secret\base.php(48): Kohana_Controller_Template->after()
#9 C:\OpenServer\domains\test\application\classes\Controller\secret\index.php(30): Controller_Secret_Base->after()
#10 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Secret_Index->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_Index))
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 03:34:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\secret\index.php [ 27 ] in file:line
2014-10-16 03:34:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 03:34:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Secret_Index::url() ~ APPPATH\classes\Controller\secret\base.php [ 23 ] in file:line
2014-10-16 03:34:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 04:47:32 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$admin ~ APPPATH\classes\Controller\Welcome.php [ 14 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:14
2014-10-16 04:47:32 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:14
2014-10-16 04:48:46 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$admin ~ APPPATH\classes\Controller\Welcome.php [ 14 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:14
2014-10-16 04:48:46 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:14
2014-10-16 04:50:09 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$admin ~ APPPATH\classes\Controller\Welcome.php [ 14 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:14
2014-10-16 04:50:09 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:14
2014-10-16 04:50:32 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$admin ~ APPPATH\classes\Controller\Welcome.php [ 14 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:14
2014-10-16 04:50:32 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:14
2014-10-16 04:50:42 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$user ~ APPPATH\classes\Controller\Welcome.php [ 14 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:14
2014-10-16 04:50:42 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:14
2014-10-16 04:50:44 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$user ~ APPPATH\classes\Controller\Welcome.php [ 14 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:14
2014-10-16 04:50:44 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:14
2014-10-16 04:50:56 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$user ~ APPPATH\classes\Controller\Welcome.php [ 14 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:14
2014-10-16 04:50:56 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:14
2014-10-16 04:54:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\secret\index.php [ 70 ] in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 04:54:24 --- DEBUG: #0 C:\OpenServer\domains\test\application\views\secret\index.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 70, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\test\application\views\base.php(14): Kohana_View->__toString()
#5 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\test\application\classes\Controller\Base.php(36): Kohana_Controller_Template->after()
#9 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(29): Controller_Base->after()
#10 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 04:55:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\secret\index.php [ 70 ] in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 04:55:29 --- DEBUG: #0 C:\OpenServer\domains\test\application\views\secret\index.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 70, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\test\application\views\base.php(14): Kohana_View->__toString()
#5 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\test\application\classes\Controller\Base.php(36): Kohana_Controller_Template->after()
#9 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(29): Controller_Base->after()
#10 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\test\application\views\secret\index.php:70
2014-10-16 04:55:39 --- CRITICAL: View_Exception [ 0 ]: The requested view /sidebar could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-10-16 04:55:39 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/sidebar')
#1 C:\OpenServer\domains\test\system\classes\Kohana\View.php(30): Kohana_View->__construct('/sidebar', Array)
#2 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(15): Kohana_View::factory('/sidebar', Array)
#3 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-10-16 04:57:50 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: plugins ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:56
2014-10-16 04:57:50 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(56): Kohana_View->__get('plugins')
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:56
2014-10-16 05:00:25 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: plugins ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:57
2014-10-16 05:00:25 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(57): Kohana_View->__get('plugins')
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:57
2014-10-16 05:00:28 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: plugins ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:57
2014-10-16 05:00:28 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(57): Kohana_View->__get('plugins')
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:57
2014-10-16 05:02:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 73 ] in file:line
2014-10-16 05:02:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 05:06:41 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$user ~ APPPATH\classes\Controller\Welcome.php [ 13 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:13
2014-10-16 05:06:41 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 13, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:13
2014-10-16 05:06:54 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$user ~ APPPATH\classes\Controller\Welcome.php [ 13 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:13
2014-10-16 05:06:54 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 13, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:13
2014-10-16 05:06:56 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 16 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:16
2014-10-16 05:06:56 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(16): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\OpenServer\d...', 16, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:16
2014-10-16 05:09:55 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Welcome.php [ 18 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:18
2014-10-16 05:09:55 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\OpenServer\d...', 18, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:18
2014-10-16 05:10:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 73 ] in file:line
2014-10-16 05:10:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 05:11:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\classes\Controller\Front.php [ 25 ] in C:\OpenServer\domains\test\application\classes\Controller\Front.php:25
2014-10-16 05:11:02 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Front.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 25, Array)
#1 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(78): Controller_Front->after()
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Auth->after()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\application\classes\Controller\Front.php:25
2014-10-16 06:46:47 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'recipient_id_id' in 'where clause' [ SELECT `message`.`id` AS `id`, `message`.`author_id` AS `author_id`, `message`.`message` AS `message`, `message`.`recipient_id` AS `recipient_id`, `message`.`date` AS `date`, `message`.`deleted` AS `deleted` FROM `messages` AS `message` WHERE `author_id` = '2' OR `recipient_id_id` = '2' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-16 06:46:47 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `message...', 'Model_Message', Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(19): Kohana_ORM->find_all()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-16 06:47:26 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 06:47:26 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\OpenServer\domains\test\application\views\index.php(32): Kohana_ORM->__get('name')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\test\application\views\base.php(41): Kohana_View->__toString()
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\test\application\classes\Controller\Base.php(40): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(33): Controller_Base->after()
#11 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 06:49:30 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 06:49:30 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\OpenServer\domains\test\application\views\index.php(32): Kohana_ORM->__get('name')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\test\application\views\base.php(41): Kohana_View->__toString()
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\test\application\classes\Controller\Base.php(40): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(33): Controller_Base->after()
#11 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 06:51:10 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 06:51:10 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\OpenServer\domains\test\application\views\index.php(32): Kohana_ORM->__get('name')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\test\application\views\base.php(41): Kohana_View->__toString()
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\test\application\classes\Controller\Base.php(40): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(34): Controller_Base->after()
#11 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 06:52:27 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 06:52:27 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\OpenServer\domains\test\application\views\index.php(32): Kohana_ORM->__get('name')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\test\application\views\base.php(41): Kohana_View->__toString()
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\test\application\classes\Controller\Base.php(40): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(34): Controller_Base->after()
#11 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 06:52:36 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 06:52:36 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\OpenServer\domains\test\application\views\index.php(32): Kohana_ORM->__get('name')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\test\application\views\base.php(41): Kohana_View->__toString()
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\test\application\classes\Controller\Base.php(40): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(34): Controller_Base->after()
#11 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 06:54:50 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 06:54:50 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\OpenServer\domains\test\application\views\index.php(32): Kohana_ORM->__get('name')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\test\application\views\base.php(41): Kohana_View->__toString()
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\test\application\classes\Controller\Base.php(40): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(34): Controller_Base->after()
#11 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 06:56:40 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 06:56:40 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\OpenServer\domains\test\application\views\index.php(32): Kohana_ORM->__get('name')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\test\application\views\base.php(41): Kohana_View->__toString()
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\test\application\classes\Controller\Base.php(40): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(38): Controller_Base->after()
#11 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 07:03:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\views\index.php [ 25 ] in file:line
2014-10-16 07:03:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 07:04:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\views\index.php [ 25 ] in file:line
2014-10-16 07:04:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 07:07:05 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 07:07:05 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\OpenServer\domains\test\application\views\index.php(31): Kohana_ORM->__get('name')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\test\application\views\base.php(41): Kohana_View->__toString()
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\test\application\classes\Controller\Base.php(40): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(38): Controller_Base->after()
#11 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 07:09:02 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 07:09:02 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\OpenServer\domains\test\application\views\index.php(31): Kohana_ORM->__get('name')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\test\application\views\base.php(41): Kohana_View->__toString()
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\test\application\classes\Controller\Base.php(40): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(38): Controller_Base->after()
#11 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 07:13:35 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 07:13:35 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\OpenServer\domains\test\application\views\index.php(31): Kohana_ORM->__get('name')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\test\application\views\base.php(41): Kohana_View->__toString()
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\test\application\classes\Controller\Base.php(40): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(38): Controller_Base->after()
#11 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Welcome->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:17:01 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:17:01 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(17): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:17:33 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:17:33 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(17): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:17:36 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:17:36 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(17): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:17:50 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:17:50 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(17): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:17:53 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:17:53 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(17): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:18:55 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:18:55 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(18): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:18:57 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:18:57 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(18): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:18:59 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:18:59 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(18): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:19:02 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:19:02 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(18): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:19:16 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:19:16 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(18): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:20:49 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Urole class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:20:49 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('id')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(18): Kohana_ORM->__get('id')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:21:15 --- CRITICAL: Kohana_Exception [ 0 ]: The roles_id property does not exist in the Model_Urole class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:21:15 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('roles_id')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(18): Kohana_ORM->__get('roles_id')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:23:25 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:23:25 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(18): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:23:34 --- CRITICAL: Kohana_Exception [ 0 ]: The role_id property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:23:34 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role_id')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(18): Kohana_ORM->__get('role_id')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:23:51 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:23:51 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(18): Kohana_ORM->__get('role')
#2 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-16 08:41:30 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '2' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-16 08:41:30 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(60): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(16): Kohana_Auth_ORM->logged_in('admin')
#5 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-16 08:41:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 72 ] in file:line
2014-10-16 08:41:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 08:42:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 72 ] in file:line
2014-10-16 08:42:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 08:42:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 72 ] in file:line
2014-10-16 08:42:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 08:42:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 72 ] in file:line
2014-10-16 08:42:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 08:42:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 72 ] in file:line
2014-10-16 08:42:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 08:42:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 72 ] in file:line
2014-10-16 08:42:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 08:42:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 72 ] in file:line
2014-10-16 08:42:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 08:42:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 72 ] in file:line
2014-10-16 08:42:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 08:42:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 72 ] in file:line
2014-10-16 08:42:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 08:43:07 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-16 08:43:07 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(45): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-16 08:48:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Auth.php [ 65 ] in file:line
2014-10-16 08:48:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 08:48:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Auth.php [ 65 ] in file:line
2014-10-16 08:48:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 12:13:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::reset() ~ APPPATH\classes\Controller\Welcome.php [ 42 ] in file:line
2014-10-16 12:13:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-16 12:13:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: chat ~ APPPATH\classes\Controller\Welcome.php [ 47 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:47
2014-10-16 12:13:51 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 47, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_get_messages()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:47
2014-10-16 12:14:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: chat ~ APPPATH\classes\Controller\Welcome.php [ 47 ] in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:47
2014-10-16 12:14:32 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Welcome.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 47, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_get_messages()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Welcome.php:47