<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class WIPCtrl {

    public function action_wip() {

      //  pobranie zawartości tabeli
      $var = App::getDB()->select("rola", "*");
      App::getSmarty()->assign("role",$var);

      //App::getMessages()->addMessage(new Message("Uciekaj stąd!", Message::INFO));
      Utils::addErrorMessage("A kysz!");

      App::getSmarty()->display("WIPView.tpl");
    }

}
