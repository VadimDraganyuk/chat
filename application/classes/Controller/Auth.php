<?php defined('SYSPATH') or die('No direct script access.');

    class Controller_Auth extends Controller_Front
    {
        public function before()
        {
            parent::before();

        }

        /**
         * Страница авторизации
         */
        public function action_login()
        {

            /*Удаление старых сессий (ошибка авторизации)*/
            Cookie::delete('session');

            $data = [];

            if ($this->request->post()) {

                $data = Arr::extract(
                    $this->request->post(),
                    array('username', 'password', 'remember')
                );

                $validator = Validation::factory($data)
                    ->rule('username', 'not_empty')
                    ->rule('password', 'not_empty');

                if ($validator->check()) {

                    if (Auth::instance()->login(
                        $data['username'],
                        $data['password'],
                        $data['remember'] == 'on' ? true : false
                    )
                    ) {

                        if (Auth::instance()->logged_in('admin')) {
                            $this->redirect('/secret');
                        }else
                            $this->redirect(URL::base(true));

                    } else {
                        $data['errors'] = array('Помилка авторизації!');
                    }
                } else {
                    $data['errors'] = $validator->errors('registration');
                }
            }

            $this->template->content = View::factory('auth/login', $data);
        }

        /**
         * Выход из аккаунта
         */
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
