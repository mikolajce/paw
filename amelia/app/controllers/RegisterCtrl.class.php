<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use core\Validator;
use app\forms\RegisterForm;

class RegisterCtrl{
	private $form;

	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new RegisterForm();
	}

	public function getParams(){
		$this->form->login = ParamUtils::getFromRequest('login');
		$this->form->pass = ParamUtils::getFromRequest('pass');
		$this->form->imie = ParamUtils::getFromRequest('imie');
		$this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
		$this->form->email = ParamUtils::getFromRequest('email');
	}

	public function validate() {
		$this->getParams();

		$v = new Validator();

		//nie ma sensu walidować dalej, gdy brak parametrów
		if (!isset($this->form->login)) return false;

		// sprawdzenie, czy potrzebne wartości zostały przekazane
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
		$this->form->imie = $v->validateFromPost('imie', [
							'trim' => true,
							'required' => true,
							'required_message' => "Wprowadź imię",
							//'regexp' => \p{L},
							'min_length' => 1,
							'validator_message' => "Imię powinno składać się wyłącznie z liter"
		]);
		$this->form->nazwisko = $v->validateFromPost('nazwisko', [
							'trim' => true,
							'required' => true,
							'required_message' => "Wprowadź nazwisko",
							//'regexp' => \p{L},
							'min_length' => 1,
							'validator_message' => "Nazwisko powinno składać się wyłącznie z liter"
		]);
		$this->form->email = $v->validateFromPost('email', [
							'trim' => true,
							'required' => true,
							'required_message' => "Wprowadź email",
							'email' => true,
							'min_length' => 1,
							'validator_message' => "Wprowadź poprawny adres email"
		]);

		if (App::getMessages()->isError()) return false;

		if (App::getDB()->has("uzytkownik", ["login" => $this->form->login])) {
			Utils::addErrorMessage('Konto już istnieje.');
		}
		return !App::getMessages()->isError();
	}

	public function action_registerShow(){
		$this->generateView();
	}

	public function action_register(){
		if ($this->validate()){
			//zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
			try {
				App::getDB()->insert("uzytkownik",[
					"login" => $this->form->login,
					"pass" => $this->form->pass,
					"imie" => $this->form->imie,
					"nazwisko" => $this->form->nazwisko,
					"email" => $this->form->email
				]);
				App::getDB()->insert("uzytkownikrola",[
					"id_uzytkownik" => App::getDB()->id("uzytkownik"),
					"id_rola" => "3", // USER
				]);
				$var_user_id = App::getDB()->get("uzytkownik","id_uzytkownik",[
					"login" => $this->form->login
				]);
				SessionUtils::store("global_user_id", $var_user_id);
				$var_username = App::getDB()->get("uzytkownik","imie",[
					"login" => $this->form->login
				]);
				SessionUtils::store("global_username", $var_username);
			} catch (\PDOException $e) {
				Utils::addErrorMessage('BŁĄD BAZY DANYCH');
				if(App::getConf()->debug)
					Utils::addErrorMessage($e->getMessage());
			}
			RoleUtils::addRole("user");
			Utils::addErrorMessage('Poprawnie utworzono konto.');
			App::getRouter()->redirectTo("hello");
		} else
			$this->generateView();
	}

	public function action_logout(){
		session_destroy();
		App::getRouter()->redirectTo('hello');
	}

	public function generateView(){
		App::getSmarty()->assign('form',$this->form); // dane formularza do widoku
		App::getSmarty()->display('RegisterView.tpl');
	}
}
