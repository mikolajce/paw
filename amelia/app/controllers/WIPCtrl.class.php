<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;

class WIPCtrl {

    public function action_wip() {

      //  pobranie zawartości tabeli
      $var = App::getDB()->select("rola", "*");
      App::getSmarty()->assign("role",$var);

      App::getSmarty()->assign("costam", SessionUtils::load("global_order_id", true));

      //App::getMessages()->addMessage(new Message("Uciekaj stąd!", Message::INFO));
      Utils::addErrorMessage("A kysz!");

      App::getSmarty()->display("WIPView.tpl");
    }

}
