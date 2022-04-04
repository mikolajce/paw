<?php

require_once dirname (__FILE__).'init.php';

switch ($action) {
	default:
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView();
		break;
	case 'calcCompute':
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process();
		break;
}
