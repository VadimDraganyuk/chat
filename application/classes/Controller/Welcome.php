<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Base {

	public $template = 'base';
	public $recipient;

	public function before()
	{
		parent::before();
		if (!Request::$current->is_ajax()) {
			$data['messages'] = ORM::factory('message')->select('users.*')->join('users', 'LEFT')->on('users.id', '=',
				'message.author_id')->where_open()->where('author_id', '!=', $this->user->id)->and_where('recipient_id',
				'=', $this->user->id)->and_where('readed', '=', 0)->and_where_close();
			$data['messages']->reset(false);
			$data['totalMessage'] = $data['messages']->count_all();
			$data['messages'] = $data['messages']->find_all();
		}
		$data['user'] = $this->user;
		if($this->request->post()) {
			$dataP = Arr::extract($this->request->post(), array(
				'recipient_id',
			));

			$this->recipient = ORM::factory('user', $dataP['recipient_id']);
		}

		$this->template->header = View::factory('/header', $data);

	}

	public function action_index()
	{
		$dataLeft['users'] =  ORM::factory('user')->where('id','!=',$this->user->id)->find_all();
		$data['leftCol'] = View::factory('/left', $dataLeft);
		$data['messages'] = ORM::factory('message')->where_open()->where('author_id','=',$this->user->id)->or_where('recipient_id','=',$this->user->id)->and_where_close()->find_all();
		$data['user'] = $this->user;
		$this->template->content = View::factory('/index', $data);

	}
	public function action_get_messages()
	{
		if($this->request->post()) {
			$data['user']  =  $this->user;
			$data['recipient'] = $this->recipient;
			$data['messages'] = ORM::factory('message')
				->where_open()
					->where('author_id', '=',$this->user->id)
					->and_where('recipient_id', '=', $this->recipient->id)
				->and_where_close()
				->or_where_open()
					->where('author_id', '=',$this->recipient->id)
					->and_where('recipient_id', '=', $this->user->id)
				->and_where_close();
			$data['messages']->reset(FALSE);
			$totalMessage = $data['messages']->count_all();
			$data['messages'] = $data['messages']->find_all();
			if($totalMessage > 0) {
				$res['chat'] =  View::factory('/chat', $data)->render();
			}
			else
				$res['chat'] = null;
			$dataHeader = $this->reload_messages();
			$dataHeader['user'] = $this->user;
			$res['header'] = View::factory('/header', $dataHeader)->render();;

			if (Request::$current->is_ajax()) {
				die(json_encode($res));
				//print_r(($res['chat'])); exit();
			}
			$this->template->content = View::factory('/index', $data);
		}
	}

	public function action_read_messages()
	{
		if($this->request->post()) {

			$data['user'] = $this->user;
			$data['recipient'] = $this->recipient;
			$data['messages'] = ORM::factory('message')
				->or_where_open()
					->where('author_id', '=',$this->recipient->id)
					->and_where('recipient_id', '=', $this->user->id)
				->and_where_close()
				->and_where('readed', '=', 0);
			$data['messages']->reset(FALSE);
			$totalMessage = $data['messages']->count_all();
			$messages = $data['messages']->find_all();
			if($totalMessage > 0 && isset($messages)){
				foreach($messages  as $message)
				{
					$message->set('readed', 1)->save();
				}
			}
			$dataHeader = $this->reload_messages();
			$dataHeader['user'] = $this->user;
			$res['header'] = View::factory('/header', $dataHeader)->render();;
			die(json_encode($res));
		}
	}
	public function action_save_messages()
	{
		$data['messages'] = ORM::factory('message')->select('users.*')->join('users', 'LEFT')->on('users.id', '=',
			'message.author_id')->where_open()->where('author_id', '!=', $this->user->id)->and_where('recipient_id',
			'=', $this->user->id)->and_where('readed', '=', 0)->and_where_close();
		$data['messages']->reset(false);
		$data['totalMessage'] = $data['messages']->count_all();
		$data['messages'] = $data['messages']->find_all();

		return $data;
	}

	public function reload_messages()
	{
		$data['messages'] = ORM::factory('message')->select('users.*')->join('users', 'LEFT')->on('users.id', '=',
			'message.author_id')->where_open()->where('author_id', '!=', $this->user->id)->and_where('recipient_id',
			'=', $this->user->id)->and_where('readed', '=', 0)->and_where_close();
		$data['messages']->reset(false);
		$data['totalMessage'] = $data['messages']->count_all();
		$data['messages'] = $data['messages']->find_all();
		return $data;
	}
	public function after()
	{
		parent::after();

		$styles = array(
			'/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css' => 'screen, projection',
			'/assets/plugins/select2/select2_metro.css' => 'screen, projection',
			'/assets/plugins/chosen-bootstrap/chosen/chosen.css' => 'screen, projection',

		);

		$plugins = array(
		);

		$scripts = array(

		);
		$this->template->styles = array_merge($styles,$this->template->styles);
		$this->template->plugins = array_merge($plugins,$this->template->plugins);
		$this->template->scripts = array_merge($scripts,$this->template->scripts);
	}

} // End Welcome
