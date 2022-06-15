<?php
	define('DB_SERVER', 'localhost');					/*idedefine nya yung mga yan*/
	define('DB_USERNAME', 'root');							/*meaning hindi mababago. Default na*/
	define('DB_PASSWORD', '');
	define('DB_NAME', 'svnhsboard');	

	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);		/*icoconnect natin sa db usinf link variable*/

	if($link === false)		/*if hindi nagconnct sa db*/{
		die("ERROR: Cannot connect to mysql. ".mysql_error());		/*mageerror yung lalabas*/
	}