<?php
	session_start();
	
	if(!isset($_SESSION['server']))
	{
		$_SESSION['server'] = 'localhost';
		$_SESSION['user'] = 'root';
		$_SESSION['password'] = 'potatofry2530';
		$_SESSION['database'] = 'shoppingcart';
		$_SESSION['userid'] = 0;
		$_SESSION['login'] = 0;
	}
	
?>
