<?php defined('SYSPATH') or die('No direct script access.');

	class Model_User extends Model_Auth_User
	{
		protected $_table_name = 'users';
		protected $_primary_key = 'id';

		protected $_has_one = [
			'message' => [
				'model' => 'message',
				'foreign_key' => 'author_id',
			]

		];
		public static function unique_login($login)
		{
			return !DB::select([DB::expr('COUNT(username)'), 'total'])
				->from('users')
				->where('username', '=', $login)
				->execute()
				->get('total');
		}
		public static function unique_email($email)
		{
			return !DB::select([DB::expr('COUNT(email)'), 'total'])
				->from('users')
				->where('email', '=', $email)
				->execute()
				->get('total');
		}
	}
