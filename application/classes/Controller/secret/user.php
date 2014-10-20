<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Secret_User extends Controller_Secret_Index
{
	public function before()
	{
		parent::before();

	}


	public function action_add()
	{
		$data['users'] = ORM::factory('user')->find_all();
		$this->template->title = 'Добавлення користувача';
		$this->template->content = View::factory('secret/users/add');
	}

	public function action_edit()
	{
		$id = $this->request->param('id');
		if ($id) {
			$data['users'] = ORM::factory('user', $id);
			$this->template->title = 'Редагування юзера';
			$this->template->content = View::factory('secret/users/add', $data);
		}

	}

	public function action_save()
	{
		if($this->request->post()){
			$data = Arr::extract($this->request->post(), array(
				'username',
				'email',
				'password'
			));

			$validator = Validation::factory($data)
				->rule('password', 'not_empty')
				->rule('password', 'alpha_numeric')
				->rule('password', 'min_length', array(':value', 6))
				->rule('password', 'max_length', array(':value', 32))
				->rule('email', 'not_empty')
				->rule('email', 'email')
				->rule('username', 'not_empty');

			if ($validator->check()) {

				if ($_FILES['avatar']['size'] > 0) {

					$filename = basename($_FILES['avatar']['name']);
					$ext = substr($filename, strrpos($filename, '.') + 1);
					$name = md5($_FILES['avatar']['name']).time();
					$newname = 'content/users_avatar/' . $name .'.'. $ext;
					if ($ext == "jpg" || $ext == "png" || $ext == "gif" || $ext == "jpeg"){
						$save = move_uploaded_file(
							$_FILES['avatar']['tmp_name'],
							$newname
						);
						if ($save) {
							$data['avatar'] = $name.'.'.$ext;
						} else {
							$data['errors'] = array('Помилка завантаження!');
						}
					}else {
						$data['errors'] = array('Невірний формат аватара');
					}
				}
				if ($this->request->param('id')) {
					$data['id'] = $id = $this->request->param('id');
					$user = ORM::factory('user', $id)
						->values($data)
						->save();
				} else {
					$user = ORM::factory('user')
						->values($data)
						->create();
					if ($user->id) {
						$role = ORM::factory('urole');
						$role->set('user_id', $user->id);
						$role->set('role_id', 1);
						$role->save();

						Email::send($data['email'],'noreply@mysite.com','Реєстрація на сайті mysite.com ',' Ви були зереєстровані на сайті mysite.com, ваш логін: '.$data['username'].' Ваш пароль: '.$data['password']);
					}
				}
				$this->redirect('/secret/user');
			} else {
				$data['errors'] = $validator->errors('registration');
				 $this->template->content = View::factory('/secret/users/add', $data);
			}
		}
	}
	public function action_delete()
	{
		if ($this->request->param('id')) {
			$user = ORM::factory('user', $this->request->param('id'))
				->delete();
			$this->redirect('/secret/user');
		}
	}

	public function after()
	{
		if ($this->auto_render) {

			$styles = array(
				'/assets/plugins/data-tables/DT_bootstrap.css' => 'screen, projection',
				'/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css' => 'screen, projection',
				'/assets/plugins/select2/select2_metro.css' => 'screen, projection',
				'/assets/plugins/chosen-bootstrap/chosen/chosen.css' => 'screen, projection',
			);

			$plugins = array(
				'/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js',
				'/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
				'/assets/plugins/select2/select2.min.js',
				'/assets/plugins/data-tables/jquery.dataTables.js',
				'/assets/plugins/data-tables/DT_bootstrap.js',
				'/assets/plugins/jquery-validation/dist/jquery.validate.min.js',
				'/assets/plugins/jquery-validation/dist/additional-methods.min.js',
				'/assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js',
				'/assets/plugins/ckeditor/ckeditor.js'
			);

			$scripts = array(
				'/assets/scripts/app.js',
				'/assets/scripts/form-validation-banner.js',
				'/assets/scripts/form-components-banner.js',
				'/assets/scripts/table-editable.js',
			);

			$this->template->styles = array_merge($styles,$this->template->styles);
			$this->template->plugins = array_merge($plugins,$this->template->plugins);
			$this->template->scripts = array_merge($scripts,$this->template->scripts);
		}
		parent::after();
	}
}
