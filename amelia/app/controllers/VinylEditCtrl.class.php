<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\VinylEditForm;
//use lib\Medoo;

class VinylEditCtrl {
  private $form;

  public function __construct() {
      //stworzenie potrzebnych obiektów
      $this->form = new VinylEditForm();
      $var = App::getDB()->select("wypozyczalnia", "*");
      App::getSmarty()->assign('wypoz',$var);
  }

  public function getParams(){
    $this->form->id_produkt = ParamUtils::getFromRequest('id_produkt');
    $this->form->tytul = ParamUtils::getFromRequest('tytul');
    $this->form->artysta = ParamUtils::getFromRequest('artysta');
    $this->form->data_wydania = ParamUtils::getFromRequest('data_wydania');
    $this->form->gatunek = ParamUtils::getFromRequest('gatunek');
    $this->form->liczba_plyt = ParamUtils::getFromRequest('liczba_plyt');
  	$this->form->dlugosc = ParamUtils::getFromRequest('dlugosc');
  	$this->form->dodatki = ParamUtils::getFromRequest('dodatki');
  	$this->form->dostepnosc = ParamUtils::getFromRequest('dostepnosc');
  	$this->form->id_wypozyczalnia = ParamUtils::getFromRequest('wypozyczalnia');
  }

  public function validateSave(){
    $this->getParams();

    if(App::getMessages()->isError())
      return false;

    $v = new Validator();

    $this->form->tytul = $v->validateFromPost('tytul', [
              'trim' => true,
              'required' => true,
              'required_message' => "Wprowadź tytuł",
              'min_length' => 1,
              'validator_message' => "Tytuł niepoprawny"
    ]);
    $this->form->artysta = $v->validateFromPost('artysta', [
              'trim' => true,
              'required' => true,
              'required_message' => "Wprowadź artystę",
              'min_length' => 1,
              'validator_message' => "Artysta niepoprawny"
    ]);
    $this->form->data_wydania = $v->validateFromPost('data_wydania', [
              'trim' => true,
              'required' => true,
              'required_message' => "Wprowadź datę",
              'numeric' => true,
              'min_length' => 4,
              'max_lenght' => 4,
              'validator_message' => "Data powinna składać się z 4 cyfr"
    ]);
    $this->form->gatunek = $v->validateFromPost('gatunek', [
              'trim' => true,
              'required' => true,
              'required_message' => "Wprowadź gatunek",
              'numeric' => false,
              'min_length' => 1,
              'validator_message' => "Gatunek niepoprawny"
    ]);
    $this->form->liczba_plyt = $v->validateFromPost('liczba_plyt', [
              'trim' => true,
              'required' => true,
              'required_message' => "Wprowadź liczbę płyt",
              'numeric' => true,
              'min_length' => 1,
              'max_lenght' => 2,
              'validator_message' => "Żaden album nie jest aż tak wielki ;~~)"
    ]);
    $this->form->dlugosc = $v->validateFromPost('dlugosc', [
              'trim' => true,
              'required' => true,
              'required_message' => "Wprowadź długość",
              'min_length' => 1,
              'regexp' => [],
              'validator_message' => "Podaj zapis mm:ss"
    ]);
    $this->form->dodatki = $v->validateFromPost('dodatki', [
              'trim' => true,
              'required' => false,
              'required_message' => "Podaj dodatki - jeśli nie ma wpisz ' - '",
              'min_length' => 1,
              'validator_message' => "Podaj dodatki - jeśli nie ma wpisz ' - '"
    ]);
    $this->form->dostepnosc = $v->validateFromPost('dostepnosc', [
              'trim' => true,
              'required' => true,
              'required_message' => "Wprowadź dostępność",
              'numeric' => true,
              'min_length' => 1,
              'validator_message' => "Podaj dostępną ilość asortymentu"
    ]);
    $this->form->id_wypozyczalnia = $v->validateFromPost('id_wypozyczalnia', [
              'trim' => true,
              'required' => true,
              'required_message' => "Podaj wypożyczalnię",
              'min_length' => 1,
              'validator_message' => "Zła wypożyczalnia"
    ]);

    if(App::getMessages()->isError())
      return false;
    /*
    $d = \DateTime::createFromFormat('Y-m-d', $this->form->birthdate);
    if ($d === false) {
        Utils::addErrorMessage('Zły format daty. Przykład: 2015-12-20');
    }
    */
    return !App::getMessages()->isError();
  }

  public function validateEdit(){
      $this->form->id_produkt = ParamUtils::getFromCleanURL(1, true, 'Błąd wywołania aplikacji');
      return !App::getMessages()->isError();

  }

  public function action_vinylNew(){
    $this->generateView();
  }

  public function action_vinylEdit() {
    if($this->validateEdit()){
		Utils::addInfoMessage('udane');
      try {
        $record = App::getDB()->get("produkt" , "*" , [
          "id_produkt" => $this->form->id_produkt
        ]);
        $this->form->id_produkt = $record['id_produkt'];
        $this->form->tytul = $record['tytul'];
        $this->form->artysta = $record['artysta'];
        $this->form->data_wydania = $record['data_wydania'];
        $this->form->gatunek = $record['gatunek'];
        $this->form->liczba_plyt = $record['liczba_plyt'];
        $this->form->dlugosc = $record['dlugosc'];
        $this->form->dodatki = $record['dodatki'];
        $this->form->dostepnosc = $record['dostepnosc'];
        $this->form->id_wypozyczalnia = $record['id_wypozyczalnia'];
      } catch (\PDOException $e) {
        Utils::addErrorMessage('BŁĄD BAZY DANYCH');
        if(App::getConf()->debug)
          Utils::addErrorMessage($e->getMessage());
      }
    }
    $this->generateView();

  }

  public function action_vinylDelete(){
    $this->validateEdit();

    try {
      App::getDB()->delete("produkt",[
        "id_produkt" => ParamUtils::getFromCleanURL(1)
      ]);
      Utils::addInfoMessage('Usunięto produkt');
    } catch (\PDOException $e) {
      Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
      if (App::getConf()->debug)
          Utils::addErrorMessage($e->getMessage());
    }

    App::getRouter()->redirectTo('vinylList');

  }

  public function action_vinylGet(){
    try {
      App::getDB()->insert("wypozprodukt",[
        "id_wypozyczenie" => App::getDB()->id("wypozyczenie"),
        "id_produkt" => ParamUtils::getFromCleanURL(1)
      ]);
    } catch (\PDOException $e) {
      Utils::addErrorMessage('Wystąpił błąd podczas dodawania produktu do koszyka');
      if (App::getConf()->debug)
          Utils::addErrorMessage($e->getMessage());
    }
    App::getRouter()->redirectTo('vinylList');

  }

  public function action_vinylSave(){
    if ($this->validateSave()) {
      try {
        if ($this->form->id_produkt == '') {
          $count = App::getDB()->count("produkt");
          if($count <= 25){
            App::getDB()->insert("produkt" , [
              "tytul" => $this->form->tytul,
            	"artysta" => $this->form->artysta,
              "data_wydania" => $this->form->data_wydania,
              "gatunek" => $this->form->gatunek,
              "liczba_plyt" => $this->form->liczba_plyt,
              "dlugosc" => $this->form->dlugosc,
              "dodatki" => $this->form->dodatki,
              "dostepnosc" => $this->form->dostepnosc,
              "id_wypozyczalnia" => $this->form->id_wypozyczalnia,
            ]);
          } else {
            Utils::addInfoMessage('Maksymalna ilość produktów osiągnięta');
            $this->generateView();
            exit();
          }
        } else {
          App::getDB()->update("produkt" , [
            "tytul" => $this->form->tytul,
            "artysta" => $this->form->artysta,
            "data_wydania" => $this->form->data_wydania,
            "gatunek" => $this->form->gatunek,
            "liczba_plyt" => $this->form->liczba_plyt,
            "dlugosc" => $this->form->dlugosc,
            "dodatki" => $this->form->dodatki,
            "dostepnosc" => $this->form->dostepnosc,
            "id_wypozyczalnia" => $this->form->id_wypozyczalnia,
          ] , [
            "id_produkt" => $this->form->id_produkt
          ]);
        }
        Utils::addInfoMessage('Pomyślnie dokonano zmian');
      } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
        if (App::getConf()->debug)
            Utils::addErrorMessage($e->getMessage());
      }

      App::getRouter()->redirectTo('vinylList');

    } else
      $this->generateView();
  }

  public function generateView(){
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->display('VinylEditView.tpl');
  }

}
