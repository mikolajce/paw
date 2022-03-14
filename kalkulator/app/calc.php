<?php

require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

// 1. pobranie parametrów

function getParams(&$x,&$y,&$z){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

function validate(&$x,&$y,&$z,&$messages){

if ( ! (isset($x) && isset($y)  && isset($z))) {
	return false;

}

// sprawdzenie, czy wartosci zostały podane
if ( $x == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $y == "") {
	$messages [] = 'Nie podano lat kredytu';
}
if ( $z == "") {
	$messages [] = 'Nie podano oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (count( $messages ) != 0) return false;

	// sprawdzenie, czy $x i $y są liczbami całkowitymi
    if (! is_numeric( $x )||!$x>0) {
		     $messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}

    if (! is_numeric( $y )||!$y>0) {
		     $messages [] = 'Druga wartość nie jest liczbą większą od zera';
	}
    if (! is_numeric( $z )||!$z>0) {
		     $messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
		if (count($messages) != 0) return false;
		else return true;
}

// 3. Wykonanie operacji

function process($x,$y,$z,&$messages,&$result){
global $role;
	//konwersja parametrów na int
	      $x = intval($x);
	      $y = intval($y);
	      $z = intval($z);


	//wykonanie operacji
	if ($role != 'admin' &&$y>5){
		$messages[] = 'Dlugie kredyty tylko dla admina!';
}
 else{
	$z=12*$z;
	$y=$y/100;
	$result = ($x*$y)/(12*(1-((12/(12+$y))**$z)));
}
}

$messages = array();
getParams($x,$y,$z);
	if ( validate($x,$y,$z,$messages) ) {
 process($x,$y,$z,$messages,$result);

}

// 4. Wywołanie widoku z przekazaniem zmiennych

include 'calc_view.php';

?>
