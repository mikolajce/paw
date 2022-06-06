<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;

class AdminCtrl {

    public function action_admin() {

      $lista = App::getDB()->select("uzytkownik", "*");
      App::getSmarty()->assign("lista", $lista);
      $upra = App::getDB()->select("uzytkownikrola", "*");
      App::getSmarty()->assign("upra", $upra);
      Utils::addInfoMessage("yomenik");
      $this->generateView();
    }

    public function action_adminPromote(){
      try {
        App::getDB()->update("uzytkownikrola", [
          "id_rola" => "1"
        ],[
          "id_uzytkownik" => ParamUtils::getFromCleanURL(1)
        ]);
      } catch (\PDOException $e) {
        Utils::addErrorMessage('Nie udało się nadać uprawnień');
        if(App::getConf()->debug)
          Utils::addErrorMessage($e->getMessage());
      }
      App::getRouter()->redirectTo("admin");
    }


    public function action_adminRevoke(){
      try {
        App::getDB()->update("uzytkownikrola", [
          "id_rola" => "3"
        ],[
          "id_uzytkownik" => ParamUtils::getFromCleanURL(1)
        ]);
      } catch (\PDOException $e) {
        Utils::addErrorMessage('Nie udało się odebrać uprawnień');
        if(App::getConf()->debug)
          Utils::addErrorMessage($e->getMessage());
      }
      App::getRouter()->redirectTo("admin");
    }

    public function action_adminDelete(){ // NIE DZIAŁA
      try {
        App::getDB()->delete("uzytkownik",[
          "id_uzytkownik" => ParamUtils::getFromCleanURL(1)
        ]);
        Utils::addInfoMessage('Usunięto konto');
      } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas usuwania konta');
        if (App::getConf()->debug)
            Utils::addErrorMessage($e->getMessage());
      }

      App::getRouter()->redirectTo('admin');

    }

    public function generateView(){

      App::getSmarty()->display("AdminView.tpl");
    }

}
