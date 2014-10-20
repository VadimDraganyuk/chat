<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-15 03:02:15 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Base.php [ 22 ] in C:\OpenServer\domains\test\application\classes\Controller\Base.php:22
2014-10-15 03:02:15 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Base.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\OpenServer\d...', 22, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Base.php:22
2014-10-15 03:03:00 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php:67
2014-10-15 03:03:00 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\test\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php:67
2014-10-15 03:07:01 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php:67
2014-10-15 03:07:01 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\test\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php:67
2014-10-15 03:07:06 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php:67
2014-10-15 03:07:06 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\test\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php:67
2014-10-15 03:07:32 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php:67
2014-10-15 03:07:32 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\test\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php:67
2014-10-15 03:07:41 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php:67
2014-10-15 03:07:41 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\test\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php:67
2014-10-15 03:07:45 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php:67
2014-10-15 03:07:45 --- DEBUG: #0 C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\test\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\test\system\classes\Kohana\Cookie.php:67
2014-10-15 07:04:48 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`login` AS `login`, `user`.`password` AS `password`, `user`.`avatar` AS `avatar`, `user`.`deleted` AS `deleted` FROM `users` AS `user` WHERE `username` = 'admin' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:04:48 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(80): Kohana_ORM->find()
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(40): Kohana_Auth->login('admin', '123456')
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:05:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`login` AS `login`, `user`.`password` AS `password`, `user`.`avatar` AS `avatar`, `user`.`deleted` AS `deleted` FROM `users` AS `user` WHERE `username` = 'admin' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:05:57 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(80): Kohana_ORM->find()
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(41): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:11:03 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`login` AS `login`, `user`.`password` AS `password`, `user`.`avatar` AS `avatar`, `user`.`deleted` AS `deleted` FROM `users` AS `user` WHERE `username` = 'admin' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:11:03 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(80): Kohana_ORM->find()
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(41): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:22:18 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php:86
2014-10-15 07:22:18 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(86): Kohana_Auth->hash('123456')
#1 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#2 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(41): Kohana_Auth->login('admin', '123456', false)
#3 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php:86
2014-10-15 07:31:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::execude() ~ APPPATH\classes\Controller\Auth.php [ 31 ] in file:line
2014-10-15 07:31:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-15 07:32:05 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\Controller\Auth.php [ 32 ] in C:\OpenServer\domains\test\application\classes\Controller\Auth.php:32
2014-10-15 07:32:05 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 32, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Auth.php:32
2014-10-15 07:32:46 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\Controller\Auth.php [ 32 ] in C:\OpenServer\domains\test\application\classes\Controller\Auth.php:32
2014-10-15 07:32:46 --- DEBUG: #0 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 32, Array)
#1 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\test\application\classes\Controller\Auth.php:32
2014-10-15 07:38:23 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:38:23 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(40): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:38:52 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:38:52 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(40): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:40:11 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:40:11 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(40): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:44:53 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:44:53 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(40): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:44:57 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:44:57 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(40): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:46:18 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:46:18 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(46): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:46:29 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:46:29 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(46): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:55:19 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:55:19 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(46): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:56:15 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 07:56:15 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(46): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 08:15:05 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 08:15:05 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(41): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 08:17:23 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 08:17:23 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(41): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 08:18:16 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 08:18:16 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456', false)
#5 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(41): Kohana_Auth->login('admin', '123456', false)
#6 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 08:19:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 46 ] in file:line
2014-10-15 08:19:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-15 08:20:28 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 08:20:28 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(60): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(15): Kohana_Auth_ORM->logged_in('login')
#5 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 08:21:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH\orm\classes\Kohana\ORM.php [ 1540 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:1540
2014-10-15 08:21:01 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1540, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(60): Kohana_ORM->has('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(15): Kohana_Auth_ORM->logged_in('login')
#4 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:1540
2014-10-15 08:21:18 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 08:21:18 --- DEBUG: #0 C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\OpenServer\domains\test\modules\orm\classes\Kohana\Auth\ORM.php(60): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\OpenServer\domains\test\application\classes\Controller\Auth.php(15): Kohana_Auth_ORM->logged_in('login')
#5 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-10-15 08:21:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 16 ] in file:line
2014-10-15 08:21:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-15 08:22:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 16 ] in file:line
2014-10-15 08:22:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-15 08:22:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 16 ] in file:line
2014-10-15 08:22:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-15 08:22:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 16 ] in file:line
2014-10-15 08:22:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-15 08:38:55 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Banners_Banner' not found ~ APPPATH\classes\Controller\secret\user.php [ 13 ] in file:line
2014-10-15 08:38:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-15 08:39:37 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-15 08:39:37 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photo')
#1 C:\OpenServer\domains\test\application\views\secret\header.php(20): Kohana_ORM->__get('photo')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\test\application\views\secret\base.php(33): Kohana_View->__toString()
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\test\application\classes\Controller\secret\base.php(45): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\test\application\classes\Controller\secret\index.php(41): Controller_Secret_Base->after()
#11 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Secret_Index->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_Index))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-15 08:40:35 --- CRITICAL: Kohana_Exception [ 0 ]: The avatar property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-15 08:40:35 --- DEBUG: #0 C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('avatar')
#1 C:\OpenServer\domains\test\application\views\secret\header.php(20): Kohana_ORM->__get('avatar')
#2 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\test\application\views\secret\base.php(33): Kohana_View->__toString()
#6 C:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\test\application\classes\Controller\secret\base.php(45): Kohana_Controller_Template->after()
#10 C:\OpenServer\domains\test\application\classes\Controller\secret\index.php(29): Controller_Secret_Base->after()
#11 C:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Controller_Secret_Index->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Secret_Index))
#14 C:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\test\modules\orm\classes\Kohana\ORM.php:603
2014-10-15 08:48:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Banners_Banner' not found ~ APPPATH\classes\Controller\secret\user.php [ 13 ] in file:line
2014-10-15 08:48:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-15 08:51:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Banners_Banner' not found ~ APPPATH\classes\Controller\secret\user.php [ 13 ] in file:line
2014-10-15 08:51:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line