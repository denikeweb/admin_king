<?php

	$admin_tocken = 'shw2Fw7Wq1t';
	$hash_key = 'admin_tocken';
	if ($_GET [$hash_key] == $admin_tocken) {
		setcookie ($hash_key, $admin_tocken);
		$_COOKIE [$hash_key] = $admin_tocken;
	}
	if ($_COOKIE [$hash_key] != $admin_tocken) die ('Access error!');

	define('DIRSEP', DIRECTORY_SEPARATOR);
	define('EXT', '.php');
	define('PATH', dirname (__FILE__) . DIRSEP);

	function __autoload($classname) {
		$filename = PATH . 'packages' . DIRSEP . strtr ($classname, "\\", DIRSEP) . EXT;
		include_once ($filename);   }

	(new Application())->run (
		include (PATH . 'config' . EXT)
	);