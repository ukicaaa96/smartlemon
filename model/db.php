<?php
class Database{
	private $servername;
	private $username;
	private $password;
	private $database;

	protected function connect(){
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "12345678";
		$this->database = "smartlemon";

		// Create connection
		$conn = new mysqli($this->servername, $this->username, $this->password,$this->database);

		return $conn;
	}
}