<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;

class HelloCtrl {

    public function action_hello() {
        $name_display = SessionUtils::load("var_username", true);
        App::getSmarty()->assign("name", $name_display);
        Utils::addInfoMessage("Hej. Co Cię sprowadza? $name_display");
        App::getSmarty()->display("HelloView.tpl");

    }

}
