<?php
/**
 * @author Denis Dragomirik <den@lux-blog.org>
 * @version 1.0
 * @since 27.04.2015 / 9:06
 */

	function get_item () {

	}

	function get_list () {

	}

	function update () {

	}

	function create () {

	}

	function delete () {

	}

	function admin () {
		$admin_tocken = 'shw2Fw7Wq1t';
		$hash_key = 'admin_tocken';
		if ($_GET [$hash_key] == $admin_tocken) {
			setcookie ($hash_key, $admin_tocken);
			$_COOKIE [$hash_key] = $admin_tocken;
		}
		if ($_COOKIE [$hash_key] != $admin_tocken) die ('Access error!');
	}

	function lock () {
		if (
			substr_count($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST']) == 0 or
			$_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest'
		) {exit();}

		admin();
	}

	function run () {
		if (lock () === false)
			die ();

		header ('Content-Type: text/html; charset=utf-8');

		$data = json_decode($_REQUEST ['data']);
	}

	run ();