<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;

class CartCtrl {
  private $cart;

  public function __construct() {
      //stworzenie potrzebnych obiektów
  }

  public function action_cartList(){
    try {
      $this->cart = App::getDB()->select("wypozprodukt",[
        "id_produkt"
      ],[
        "id_wypozyczenie" => SessionUtils::load("global_order_id", true)
      ]);
    } catch (\PDOException $e) {
      Utils::addErrorMessage('Nie udało się wyświetlić zawartości koszyka');
      if(App::getConf()->debug)
        Utils::addErrorMessage($e->getMessage());
    }

    App::getSmarty()->assign("cart", $this->cart);
    App::getSmarty()->display("CartView.tpl");
  }

  public function action_cartDelete(){
    try {
      App::getDB()->delete("wypozprodukt",[
        "id_produkt" => ParamUtils::getFromCleanURL(1)
      ]);
      Utils::addInfoMessage('Usunięto z koszyka!');
    } catch (\PDOException $e) {
      Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu z koszyka');
      if (App::getConf()->debug)
          Utils::addErrorMessage($e->getMessage());
    }
        App::getRouter()->redirectTo('cartList');
  }

  public function action_cartFinalize(){

  }

}
