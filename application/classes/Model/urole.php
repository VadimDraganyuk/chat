<?php defined('SYSPATH') or die('No direct script access.');

class Model_Urole extends ORM {
	protected $_table_name = 'roles_users';
	protected $_foreign_key = 'user_id';

    protected $_table_columns = array(
        'user_id' => array(
            'type' => 'int',
            'is_nullable' => TRUE,
        ),
        'role_id' => array(
            'type' => 'int',
            'is_nullable' => TRUE,
        ),
    );
}
