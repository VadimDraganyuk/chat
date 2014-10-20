<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Secret_Base extends Controller_Template
{
    public $template = 'secret/base';
    public $auto_render = true;
    public $admin;
    public $active;
    public $cache;

    public function before()
    {
        parent::before();

                $this->template->styles = array();
                $this->template->plugins = array();
                $this->template->scripts = array();

            if (Auth::instance()->logged_in('admin')) {
                $this->admin = Auth::instance()->get_user();
                $this->template->header = View::factory('secret/header')->set('admin', $this->admin);
            } else {
                    $this->redirect('/login');
            }



    }

    public function after()
    {

            $styles = array();
            $plugins = array();

            $scripts = array(
                '/assets/scripts/app.js',
            );

            $this->template->styles = array_merge($styles,$this->template->styles);
            $this->template->plugins = array_merge($plugins,$this->template->plugins);
            $this->template->scripts = array_merge($scripts,$this->template->scripts);

            $this->template->sidebar = View::factory('secret/sidebar')
                ->set('current', $this->request->controller())
                ->set('active', $this->active);
        parent::after();
    }
}
