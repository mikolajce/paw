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
  private $desc;

  public function __construct() {
      //stworzenie potrzebnych obiektów
  }

  public function action_cartList(){
    try {
      $this->cart = App::getDB()->select("wypozprodukt",[
        "id_produkt",
        "id_wypozyczenie"
      ]
      ,["id_wypozyczenie" => SessionUtils::load("global_order_id", true)]
    );
    } catch (\PDOException $e) {
      Utils::addErrorMessage('Nie udało się wyświetlić zawartości koszyka');
      if(App::getConf()->debug)
        Utils::addErrorMessage($e->getMessage());
    }
    /*
    try {
      $this->cart = App::getDB()->select("wypozyczenie",[
        "id_wypozyczenie",
        "id_uzytkownik",
        "data",
        "zwrot",
        "cena",
        "zakonczone"
      ],[
        "id_uzytkownik" => SessionUtils::load("id_uzytkownik", true),
      ]);
    } catch (\PDOException $e) {
      Utils::addErrorMessage('Nie udało się wyświetlić zawartości koszyka');
      if(App::getConf()->debug)
        Utils::addErrorMessage($e->getMessage());
    }

    try {
      $this->desc = App::getDB()->select("produkt",[
        "[>]wypozprodukt" => ["id_produkt" => "id_produkt"]
      ],[
        "produkt.tytul",
        "produkt.artysta"
      ],[
        "wypozprodukt.id_wypozyczenie" => SessionUtils::load("global_order_id", true)
      ]);
    } catch (\Exception $e) {

    }*/
    App::getSmarty()->assign("cart", $this->cart);
    App::getSmarty()->display("CartView.tpl");
  }

  public function action_cartDelete(){
    try {
      App::getDB()->delete("wypozprodukt",[
        "id_produkt" => ParamUtils::getFromCleanURL(1),
        "id_wypozyczenie" => SessionUtils::load("global_order_id", true)
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
    if (!App::getDB()->has("wypozprodukt",[
        "id_wypozyczenie" => SessionUtils::load("global_order_id", true)
      ])) {
      Utils::addErrorMessage('Koszyk jest pusty!');

    } else {
      try {
        App::getDB()->update("wypozyczenie",[
          "zakonczone" => "1"
        ],[
          "id_wypozyczenie" => SessionUtils::load("global_order_id", true)
        ]);
        App::getDB()->insert("wypozyczenie",[
          "id_uzytkownik" => SessionUtils::load("global_user_id", true),
        ]);
		SessionUtils::store("global_order_id",App::getDB()->id("wypozyczenie"));
      } catch (\Exception $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas finalizacji zamówienia');
        if (App::getConf()->debug)
          Utils::addErrorMessage($e->getMessage());
      }
    }
    App::getRouter()->redirectTo('cartList');
  }

}
