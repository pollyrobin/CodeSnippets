<?php
Class DbConnect
{
	private $host;
	private $username;
	private $password;
	
	public function __construct($database)
	{
		include('dbcredentials.php');
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;	
		$this->database = $database;
		$this->Connection();
	}
	public function Connection()
	{
		$connection = 
		mysql_pconnect($this->host, $this->username, $this->password) 
		or trigger_error(mysql_error());	
		return $connection;
	}
	
	public function Database()
	{
		$database = mysql_select_db($this->database, $this->Connection())
		or trigger_error(mysql_error());
		return $database;
	}
	
	public function Query($query)
	{	
		$this->Database();
		$result = mysql_query($query)	
		or trigger_error(mysql_error());
		return $result;
	}
	
	
}
?>
