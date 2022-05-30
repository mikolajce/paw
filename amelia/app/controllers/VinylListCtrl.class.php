<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
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

    $search_params = [];
    if(isset($this->form->tytul) && strlen($this->form->tytul) > 0){
      $search_params['tytul[~]'] = $this->form->tytul . '%';
    }
    if(isset($this->form->artysta) && strlen($this->form->artysta) > 0){
      $search_params['artysta[~]'] = $this->form->artysta . '%';
    }

    $num_params = sizeof($search_params);
    if ($num_params < 1) {
      $where = ["AND" => &$search_params];
    } else
      $where = &$search_params;


    //$where ["ORDER"] = "tytul";

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
      ], $where);
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
