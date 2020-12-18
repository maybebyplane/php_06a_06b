<?php

require_once 'init.php';

switch ($action) {
	default :
		$ctrl = new app\control\CalcCtrl();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		$ctrl = new app\control\CalcCtrl();
		$ctrl->process ();
	break;
}