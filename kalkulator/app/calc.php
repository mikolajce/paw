<?php

require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

// 1. pobranie parametrów

function getParams(&$form){
	$form['x'] = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$form['y'] = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$form['z'] = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

function validate(&$form,&$infos,&$messages,&$hide_intro){

	if(!(isset($form['x']) && isset($form['y']) && isset($form['z']))) {
		return false;
	}

	$hide_intro = true;
	$infos [] = 'Przekazano parametry.';

	// sprawdzenie, czy wartosci zostały podane
	if($form['x'] == ""){
		$messages [] = 'Nie podano kwoty';
	}
	if($form['y'] == ""){
		$messages [] = 'Nie podano lat kredytu';
	}
	if($form['z'] == ""){
		$messages [] = 'Nie podano oprocentowania';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if(count($messages) != 0){
	// sprawdzenie, czy liczby sa prawidlowe
		if(!is_numeric($x) || !$x>0){
			$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
		}
		if(!is_numeric($y) || !$y>0){
			$messages [] = 'Druga wartość nie jest liczbą większą od zera';
		}
		if(!is_numeric($z) || !$z>0){
			$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
		}
	}
	if (count($messages) > 0)
		return false;
	else
		return true;
}

// 3. Wykonanie operacji

function process(&$form,&$infos,&$messages,&$result){

	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	//konwersja parametrów na int
	$form['x'] = floatval($form['x']);
	$form['y'] = floatval($form['y']);
	$form['z'] = floatval($form['z']);


	//wykonanie operacji
	$form['z']=12*$form['z'];
	$form['y']=$form['y']/100;
	$result = ($form['x']*$form['y'])/(12*(1-((12/(12+$form['y']))**$form['z'])));

}

$form = null;
$infos = array();
$messages = array();
$result = null;

getParams($form);
if(validate($form,$infos,$messages,$hide_intro)){
	process($form,$infos,$messages,$result);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 04');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');
