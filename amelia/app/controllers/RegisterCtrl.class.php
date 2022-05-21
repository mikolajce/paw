<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
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

		//nie ma sensu walidować dalej, gdy brak parametrów
		if (!isset($this->form->login)) return false;

		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if (empty($this->form->login)) {
			Utils::addErrorMessage('Nie podano loginu.');
		}
		if (empty($this->form->pass)) {
			Utils::addErrorMessage('Nie podano hasła.');
		}
		if (empty($this->form->imie)) {
			Utils::addErrorMessage('Nie podano imienia.');
		}
		if (empty($this->form->nazwisko)) {
			Utils::addErrorMessage('Nie podano nazwiska.');
		}
		if (empty($this->form->email)) {
			Utils::addErrorMessage('Nie podano adresu email.');
		}

		//nie ma sensu walidować dalej, gdy brak wartości
		if (App::getMessages()->isError()) return false;

		// sprawdzenie, czy dane logowania poprawne
		// (takie informacje najczęściej przechowuje się w bazie danych)

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
