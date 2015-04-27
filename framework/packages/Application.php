<?php
/**
 * @class Application
 * @author Denis Dragomirik <den@lux-blog.org>
 * @version 1.0
 * @since 27.04.2015 / 8:17
 */

class Application {
	/**
	 * @var DB
	 */
	private $db;
	/**
	 * @var array
	 */
	private $config;

	/**
	 * @param array $config
	 */
	function run (array $config) {
		$this->config = $config;
		$this->db = new DB ($config ['mysql']);
		$this->db->connect ();

		$this->foreachTable ();

		$this->db->disconnect();
	}

	/**
	 * Run generator for each table at config
	 */
	function foreachTable () {
		foreach ($this->config ['table'] as $value)
			(new Generator ($this->db->db(), $value))->run ();
	}
} 