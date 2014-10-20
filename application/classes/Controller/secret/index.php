<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Secret_Index extends Controller_Secret_Base
{
    public function before()
    {
        parent::before();

    }

    public function action_index()
    {
        $data = array();
        $data['admin'] = $this->admin;
        $this->template->header = View::factory('secret/header', $data);
        $this->template->sidebar = View::factory('secret/sidebar', $data);
        $this->template->content = View::factory('secret/index', $data);

        $data['users'] = ORM::factory('user')->find_all();
        $this->template->title = 'Користувачі';
        $this->template->content = View::factory('secret/index', $data);
    }

    public function action_logout()
    {
        Auth::instance()->logout();
        $this->redirect('/login');
    }


    public function after()
    {
        parent::after();
    }
}
