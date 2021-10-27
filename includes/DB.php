<?php
Class DB extends PDO {
	public function __construct($dsn, $username = null, $password = null, $options = null)
	{
		parent::__construct($dsn, $username, $password, $options);
	}
}
