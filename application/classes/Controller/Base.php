<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

	public $template = 'base';
	public $auto_render = TRUE;
	public $user;
	public $cache;

	public function before()
	{
		parent::before();

		if (Auth::instance()->logged_in()) {
			$this->user = Auth::instance()->get_user();
		}else
			$this->redirect('/login');
		$this->template->styles = array();
		$this->template->plugins = array();
		$this->template->scripts = array();
	}

	public function after()
	{

			$styles = array(
				'/media/css/pstyle.css' => 'screen, projection',
				'/media/css/reset.css' => 'screen, projection',
				'/assets/plugins/gritter/css/jquery.gritter.css' => 'screen, projection',
			);


			$scripts = array(
				'/assets/scripts/app.js',
				'/assets/plugins/gritter/js/jquery.gritter.js',
				'/media/js/main.js',
			);

			$this->template->styles = array_merge($this->template->styles, $styles);
			$this->template->scripts = array_merge($this->template->scripts, $scripts);

		parent::after();
	}

} // End Welcome
