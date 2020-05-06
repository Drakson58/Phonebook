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

		$this->view->ErrorRegister = false;

		$this->render('registerContact');
	}

	public function register() {

		# Debug
		/*
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
		*/

		$contact = Container::getModel('Contact');
		$contact->__set('name', $_POST['name']);
		$contact->__set('number', $_POST['number']);
		$contact->__set('email', $_POST['email']);

		if($contact->validateRegister() && count($contact->getContactByNumber()) == 0){
			
			$contact->register();
			$this->view->ErrorRegister = false;
			$this->render('registerContact');
		}else{

			$this->view->ErrorRegister = true;
			$this->render('registerContact');
			
		}

	}
}


?>