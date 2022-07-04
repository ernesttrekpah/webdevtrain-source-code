<?php 



// DATABASE VARIABLES

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBNAME', 'webdev_reg_db');
	define('DBPASS', '');
	define('DBCHARSET', 'utf8');
}else

{
	define('DBHOST', $_SERVER['SERVER_NAME']);
}






?>