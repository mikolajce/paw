<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use core\Validator;
use app\forms\LoginForm;

class LoginCtrl{
	private $form;

	public function __construct(){
		$this->form = new LoginForm();
	}

	public function getParams(){
		$this->form->login = ParamUtils::getFromRequest('login');
		$this->form->pass = ParamUtils::getFromRequest('pass');
	}

	public function validate() {
		$this->getParams();
		$v = new Validator();

		if (!isset($this->form->login)) return false;

		$this->form->login = $v->validateFromPost('login', [
							'trim' => true,
							'required' => true,
							'required_message' => "Nie podano loginu",
							'min_length' => 1,
							'validator_message' => "Login niepoprawny"
		]);
		$this->form->pass = $v->validateFromPost('pass', [
							'trim' => true,
							'required' => true,
							'required_message' => "Wprowadź hasło",
							'min_length' => 1,
							'validator_message' => "Hasło niepoprawne"
		]);

		//nie ma sensu walidować dalej, gdy brak wartości
		if (App::getMessages()->isError()) return false;

		// sprawdzenie, czy dane logowania poprawne
		// (takie informacje najczęściej przechowuje się w bazie danych)

		if (App::getDB()->has("uzytkownik" , [
			"login" => $this->form->login,
			"pass" => $this->form->pass			]))
		{
			$var_user_id = App::getDB()->get("uzytkownik","id_uzytkownik",[
				"login" => $this->form->login
			]);
			SessionUtils::store("global_user_id", $var_user_id);
			$var_username = App::getDB()->get("uzytkownik","imie",[
				"login" => $this->form->login
			]);
			SessionUtils::store("global_username", $var_username);
			if ($this->form->login && $this->form->pass == "admin") {
				RoleUtils::addRole("admin");
			} else if ($this->form->login && $this->form->pass == "employee") {
				RoleUtils::addRole("employee");
			}	else
				RoleUtils::addRole("user");
				App::getDB()->insert("wypozyczenie",[
					"id_uzytkownik" => SessionUtils::load("global_user_id", true),
				]);
				$var_global_order_id = App::getDB()->id("wypozyczenie");
				SessionUtils::store("global_order_id", $var_global_order_id);
		} else {
			Utils::addErrorMessage('Niepoprawny login lub hasło');
		}
		return !App::getMessages()->isError();
	}

	public function action_loginShow(){
		$this->generateView();
	}

	public function action_login(){
		if ($this->validate()){
			//zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)

			Utils::addErrorMessage('Poprawnie zalogowano do systemu');
			App::getRouter()->redirectTo("hello");
		} else {
			//niezalogowany => pozostań na stronie logowania
			$this->generateView();
		}
	}

	public function action_logout(){
		session_destroy();
		App::getDB()->delete("wypozyczenie",[
			"zakonczone" => "0"
		]);
		App::getRouter()->redirectTo('hello');
	}

	public function generateView(){
		App::getSmarty()->assign('form',$this->form); // dane formularza do widoku
		App::getSmarty()->display('LoginView.tpl');
	}
}
