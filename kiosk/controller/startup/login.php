<?php
class ControllerStartupLogin extends Controller {
	public function index() {
		$route = isset($this->request->get['route']) ? $this->request->get['route'] : '';

		//api login
		if(isset($this->request->get['route']) && $this->request->get['route'] == 'api/authenticate'){
			return new Action('api/authenticate');
		}
		//api login

		$ignore = array(
			'common/login',
			'common/forgotten',
			'common/reset'
		);

		// User
		$this->registry->set('user', new Cart\User($this->registry));

		if(!preg_match('/api/', $route)){

			if (!$this->user->isLogged() && !in_array($route, $ignore)) {
				return new Action('common/login');
			}

			if (isset($this->request->get['route'])) {
				$ignore = array(
					'common/login',
					'common/logout',
					'common/forgotten',
					'common/reset',
					'error/not_found',
					'error/permission'
				);

				if (!in_array($route, $ignore) && (!isset($this->request->get['token']) || !isset($this->session->data['token']) || ($this->request->get['token'] != $this->session->data['token']))) {
					
					if(preg_match('/api/',$this->request->get['route'])){
						return 'Invalid token!!!';
					}
					return new Action('common/login');
				}
			} else {
				if (!isset($this->request->get['token']) || !isset($this->session->data['token']) || ($this->request->get['token'] != $this->session->data['token'])) {
					return new Action('common/login');
				}
			}
		}

	}
}