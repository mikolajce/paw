<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\VinylSearchForm;

class VinylListCtrl {
  private $form;
  private $records;

  public function __construct() {
      //stworzenie potrzebnych obiektów
      $this->form = new VinylSearchForm();
  }

  public function getParams(){
    $this->form->tytul = ParamUtils::getFromRequest('tytul');
    $this->form->artysta = ParamUtils::getFromRequest('artysta');
    $this->form->data_wydania = ParamUtils::getFromRequest('data_wydania');
    $this->form->gatunek = ParamUtils::getFromRequest('gatunek');
  }

  public function validate(){
    $this->getParams();

    return !App::getMessages()->isError();
  }

  public function action_vinylList() {
    $this->validate();

    $v = new Validator();

    $search_params = [];

    if(isset($this->form->tytul) && strlen($this->form->tytul) > 0){
      $this->form->tytul = $v->validateFromPost('tytul', [
                'trim' => true,
                'required' => true,
                'required_message' => "",
                'min_length' => 1,
                'validator_message' => "Tytuł niepoprawny"
      ]);
      $search_params['tytul[~]'] = $this->form->tytul . '%';
    }
    if(isset($this->form->artysta) && strlen($this->form->artysta) > 0){
      $this->form->artysta = $v->validateFromPost('artysta', [
                'trim' => true,
                'required' => true,
                'required_message' => "Wprowadź artystę",
                'min_length' => 1,
                'validator_message' => "Artysta niepoprawny"
      ]);
      $search_params['artysta[~]'] = $this->form->artysta . '%';
    }
	  if(isset($this->form->data_wydania) && strlen($this->form->data_wydania) > 0){
      $this->form->data_wydania = $v->validateFromPost('data_wydania', [
                'trim' => true,
                'required' => true,
                'required_message' => "Wprowadź datę",
                'numeric' => true,
                'min_length' => 4,
                'max_lenght' => 4,
                'validator_message' => "Data powinna składać się z 4 cyfr"
      ]);
      $search_params['data_wydania[~]'] = $this->form->data_wydania . '%';
    }
	  if(isset($this->form->gatunek) && strlen($this->form->gatunek) > 0){
      $this->form->gatunek = $v->validateFromPost('gatunek', [
                'trim' => true,
                'required' => true,
                'required_message' => "Wprowadź gatunek",
                'numeric' => false,
                'min_length' => 1,
                'validator_message' => "Gatunek niepoprawny"
      ]);
      $search_params['gatunek[~]'] = $this->form->gatunek . '%';
    }

    $num_params = sizeof($search_params);
    if ($num_params > 1) {
      $where = ["AND" => &$search_params];
    } else
      $where = &$search_params;

    try {
      $this->records = App::getDB()->select("produkt" , [
        "id_produkt",
        "tytul",
        "artysta",
        "data_wydania",
        "gatunek",
        "liczba_plyt",
        "dlugosc",
        "dodatki",
        "dostepnosc",
        "id_wypozyczalnia"
      ],
        $where
      );
    } catch (\PDOException $e) {
      Utils::addErrorMessage('BŁĄD BAZY DANYCH');
      if(App::getConf()->debug)
        Utils::addErrorMessage($e->getMessage());
    }

    App::getSmarty()->assign("searchForm", $this->form);
    App::getSmarty()->assign("plyty", $this->records);
    App::getSmarty()->display("VinylListView.tpl");

    }

}
