<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

class CalcCtrl{

  private $messages;
  private $form;
  private $result;

  public function __construct(){
    $this->messages = new Messages();
    $this->form = new CalcForm();
    $this->result = new CalcResult();
  }

  public function getParams(){
    $this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
    $this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
    $this->form->z = isset($_REQUEST ['z']) ? $_REQUEST ['z'] : null;
  }

  public function validate(){

    if(!( isset($this->form->x) && isset($this->form->y) && isset($this->form->z)))
      return false;


    if ($this->form->x == "") {
			$this->msgs->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->y == "") {
			$this->msgs->addError('Nie podano liczby lat');
		}
    if ($this->form->z == "") {
			$this->msgs->addError('Nie podano oprocentowania');
    }

    if (! $this->msgs->isError()) {

			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->y )) {
				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
			}
		}

    return ! $this->msgs->isError();

  }

  public function process(){

    $this->getParams();

    if($this->validate()){
      $this->form->x = intval($this->form->x);
      $this->form->y = intval($this->form->y);
      $this->form->z = intval($this->form->z);
      $this->messages->addInfo('Parametry poprawne');

      $this->form->$z=12*$this->form->$z;
		  $this->form->$y=$this->form->$y/100;
		  $result = ($this->form->$x*$this->form->$y)/(12*(1-((12/(12+$this->form->$y))**$this->form->$z)));

      $this->messages->addInfo('Wykonano obliczenia');
    }

    $this->generateView();
  }

  public function generateView(){
    global $conf;

    $smarty = new Smarty();
		$smarty->assign('conf',$conf);

		$smarty->assign('page_title','Kalkulator');
		$smarty->assign('page_description','Kalkulator obliczajacy rate kredytu');
		$smarty->assign('page_header','Kalkulator kredytowy');

		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);

		$smarty->display($conf->root_path.'/app/calc/CalcView.html');
  }

}
?>
