<?php
/**
 * @class DB
 * @author Denis Dragomirik <den@lux-blog.org>
 * @version 1.0
 * @since 27.04.2015 / 8:19
 */

class DB {
	/**
	 * @var mysqli
	 */
	private $mysqli;

	/**
	 * @var array
	 */
	private $config;

	/**
	 * @param array $config
	 */
	function __construct (array $config = NULL) {
		if (!is_null($config)) $this->setConfig($config);
	}

	/**
	 * DB connect via mysqli
	 *
	 * @param array $config
	 */
	function connect () {
		//connect to db
		$this->mysqli = new \mysqli(
			$this->config ['server'   ],
			$this->config ['user_name'],
			$this->config ['user_pass'],
			$this->config ['db_name'  ]
		);

		// check connect
		if ($this->mysqli->connect_errno)
			die ('MySQLi cann\'t connect with DataBase');
	}

	/**
	 * DB disconnect via mysqli
	 */
	function disconnect() {
		$this->mysqli->close();
	}

	/**
	 * MySQLi obj getter
	 *
	 * @return mysqli
	 */
	function db() {
		return $this->mysqli;
	}

	/**
	 * Connection configurations setter
	 *
	 * @param array $config
	 */
	function setConfig (array $config) {
		$this->config = $config;
	}
} 