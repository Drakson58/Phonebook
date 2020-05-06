<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['listContacts'] = array(
			'route' => '/listContacts',
			'controller' => 'indexController',
			'action' => 'listContacts'
		);

		$routes['registerContact'] = array(
			'route' => '/registerContact',
			'controller' => 'indexController',
			'action' => 'registerContact'
		);

		$routes['register'] = array(
			'route' => '/register',
			'controller' => 'indexController',
			'action' => 'register'
		);

		$routes['searchContact'] = array(
			'route' => '/searchContact',
			'controller' => 'indexController',
			'action' => 'searchContact'
		);

		$routes['Contact'] = array(
			'route' => '/Contact',
			'controller' => 'indexController',
			'action' => 'Contact'
		);
		$this->setRoutes($routes);
	}

}

?>