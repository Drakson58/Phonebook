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
		$this->setRoutes($routes);
	}

}

?>