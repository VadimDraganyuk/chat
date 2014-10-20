<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Front extends Controller_Template {

	public $template = 'front';

	public function before()
	{
		parent::before();

		$this->template->styles = array();
		$this->template->plugins = array();
		$this->template->scripts = array();
	}

	public function after()
	{

			$styles = array(
				'/media/css/pstyle.css' => 'screen, projection',
				'/media/css/reset.css' => 'screen, projection',
			);
			$scripts = array();
			$this->template->styles = array_merge($this->template->styles, $styles);
			$this->template->scripts = array_merge($this->template->scripts, $scripts);

		parent::after();
	}

}
