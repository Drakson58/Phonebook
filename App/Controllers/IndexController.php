<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {

		$this->render('index');
	}

	public function listContacts() {

		$this->render('listContacts');
	}

	public function registerContact() {

		$this->render('registerContact');
	}
}


?>