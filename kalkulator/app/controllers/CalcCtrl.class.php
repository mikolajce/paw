<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl{

  private $form;
  private $result;

  public function __construct(){
    $this->form = new CalcForm();
    $this->result = new CalcResult();
  }

  public function getParams(){
    $this->form->x = getFormRequest('x');
    $this->form->y = getFormRequest('y');
    $this->form->z = getFormRequest('z');
  }

  public function validate(){

    if(!( isset($this->form->x) && isset($this->form->y) && isset($this->form->z)))
      return false;

    if ($this->form->x == "") {
			$this->messages->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->y == "") {
			$this->messages->addError('Nie podano liczby lat');
		}
    if ($this->form->z == "") {
			$this->messages->addError('Nie podano oprocentowania');
    }

    if (! getMessages()->isError()){

			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->y )) {
				$this->messages->addError('Druga wartość nie jest liczbą całkowitą');
			}
		}

    return ! getMessages()->isError();

  }

  public function process(){

    $this->getParams();

    if($this->validate()){
      $this->form->x = intval($this->form->x);
      $this->form->y = intval($this->form->y);
      $this->form->z = intval($this->form->z);

      if($this->form->z > 5){
        getMessages()->addError('Duży procent tylko dla admina');
      }else
        getMessages()->addInfo('Parametry poprawne');

      $x = $this->form->x;
	    $y = $this->form->y*12;
	    $z = $this->form->z/100;

		  $result = ($x*$z)/(12*(1-((12/(12+$z))**$y)));
		  $this->result->result = number_format($result, 1, ',', ' ');

      getMessages()->addInfo('Wykonano obliczenia');
    }

    $this->generateView();
  }

  public function action_calcShow(){
    getMessages()->addInfo('siemano kolano');
    $this->generateView();
  }

  public function generateView(){

    getSmarty()->assign('user',unserialize($_SESSION['user']));

		getSmarty()->assign('page_title','Kalkulator');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);

		getSmarty()->display('CalcView.tpl');
  }

}
?>
