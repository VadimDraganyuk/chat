<?php defined('SYSPATH') or die('No direct script access.');

class Model_Message extends ORM {
	protected $_table_name = 'messages';
	protected $_foreign_key = 'id';
	protected $_belongs_to = array(
		'user' => array(
			'model' => 'user',
			'foreign_key' => 'id',
		),
	);
	protected $_table_columns = array(
		'id' => array(
			'type' => 'int',
			'is_nullable' => FALSE,
		),
		'author_id' => array(
			'type' => 'int',
			'is_nullable' => FALSE,
		),
		'recipient_id' => array(
			'type' => 'int',
			'is_nullable' => FALSE,
		),
		'message' => array(
			'type' => 'string',
			'is_nullable' => FALSE,
		),
		'date' => array(
			'type' => 'date',
			'is_nullable' => FALSE,
		),
		'deleted' => array(
			'type' => 'int',
			'is_nullable' => FALSE,
		),
		'readed' => array(
			'type' => 'int',
			'is_nullable' => FALSE,
		)
	);
}
