<?php

require_once dirname(__FILE__).'/../config.php';

// 1. pobranie parametrów

$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$z = $_REQUEST ['z'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

if(!(isset($x) && isset($y) && isset($z))){
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if($x == ""){
	$messages [] = 'Nie podano kwoty kredytu';
}
if($y == ""){
	$messages [] = 'Nie podano lat kredytu';
}
if($z == ""){
	$messages [] = 'Nie podano oprocentowania';
}

if (empty( $messages )) {
	
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą';
	}
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $z )) {
		$messages [] = 'Trzecia wartość nie jest liczbą';
	}	

}

// 3. Wykonanie operacji

if(empty($messages)){
	$x = intval($x);
	$y = intval($y);
	$z = intval($z);
	
	$result = $x/($y*(1+($z/12)));
}

// 4. Wywołanie widoku z przekazaniem zmiennych

include 'calc_view.php';

?>