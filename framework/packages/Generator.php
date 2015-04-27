<?php
/**
 * @class Generator
 * @author Denis Dragomirik <den@lux-blog.org>
 * @version 1.0
 * @since 27.04.2015 / 8:40
 */

class Generator {
	/**
	 * @var string
	 */
	private $table;

	/**
	 * @var mysqli
	 */
	private $db;

	/**
	 * @param $db
	 * @param $table
	 */
	function __construct ($db, $table) {
		$this->db = $db;
		$this->table = $table;
	}

	function run () {

	}
} 