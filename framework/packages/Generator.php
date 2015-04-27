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
	 * @var FilesWorker
	 */
	private $file;

	/**
	 * @param $db
	 * @param $table
	 */
	function __construct ($db, $table) {
		$this->db = $db;
		$this->table = $table;
	}

	function run () {
		$this->file = new FilesWorker();

		$this->file->render ();
	}

	private function getFields () {

	}

	private function genFrontEndStartView () {

	}

	private function genFrontEndRead () {

	}

	private function genFrontEndCreate () {

	}

	private function genFrontEndUpdate () {

	}

	private function genFrontEndJS () {

	}

	private function genBackEndRead () {

	}

	private function genBackEndUpdate () {

	}

	private function genBackEndCreate () {

	}

	private function genBackEndDelete () {

	}

	private function genBackEndPagination () {

	}
}
	/**
	 * type boolean - checkbox
	 * if foreign key - select_box
	 * type enum - select_box
	 * type int - place 25 symbols lock
	 * type text - textarea
	 * type date - placeholder
	 *
	 * comments to DB:
	 * for text type #wysiwyg# - add WYSIWYG-editor
	 * for varchar type #file# - upload files
	 * for date #now# - print this date
	 *
	 * @TODO / plan:
	 *       create frontend (list, pagination, delete,
	 *          update, read, create, create form, update form,
	 *          if foreign key read other table, wysiwyg, file, css),
	 *       create backend, db scanner and code generator, file saver
	 */