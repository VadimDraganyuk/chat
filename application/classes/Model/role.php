<?php defined('SYSPATH') or die('No direct script access.');

class Model_Role extends ORM {
    protected $_table_name = 'roles';
    protected $_primary_key = 'id';

    protected $_table_columns = array(
        'id' => array(
            'type' => 'int',
            'is_nullable' => FALSE,
        ),
        'name' => array(
            'type' => 'string',
            'is_nullable' => FALSE,
        ),
    );
}
