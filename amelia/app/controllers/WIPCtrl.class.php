<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class WIPCtrl {

    public function action_wip() {

      App::getMessages()->addMessage(new Message("Page under construction.", Message::INFO));
      Utils::addInfoMessage("Call an administrator.");

      App::getSmarty()->display("WIPView.tpl");
    }

}
