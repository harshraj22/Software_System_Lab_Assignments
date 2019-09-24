#!/usr/bin/php
<?php 

	//error handler function
	function customError($errno, $errstr) {
	  echo " Error: [$errno] $errstr ";
	  die();
	}

	//set error handler
	set_error_handler("customError",E_USER_ERROR);

	$k = $argv[1];
	if(!ctype_digit($argv[1]))
		trigger_error("Passed argument should be a positive Integer : '".$argv[1]."'\n",E_USER_ERROR);

	$ar = array( );

	for($i = 2;$i < sizeof($argv); $i++){
		$var = $argv[$i];
		// if the argument is not number or it is decimal(float)
		if(!is_numeric($argv[$i]) || stripos($var,'.')!=false)
			trigger_error("Value must be an integer : '".$argv[$i]."'\n",E_USER_ERROR);
		array_push($ar,$argv[$i]);
	}

	sort($ar);

	if(sizeof($ar) < $k)
		trigger_error("size is too large\n",E_USER_ERROR);
	elseif ($k == 0)
		trigger_error("k should be a positive integer\n",E_USER_ERROR);

	echo $ar[$k-1]."\n";

?>