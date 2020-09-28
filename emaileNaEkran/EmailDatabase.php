<?php
	class EmailDatabase
	{
		private $db_host = 'localhost';
		private $db_user = 'root';
		private $db_pass = '';
		private $db_name = 'cvemaile';
		private $connect;
		public $emails = array();
		
		
		public function __construct()
		{
			$this -> connect = new mysqli($this -> db_host, $this -> db_user, $this -> db_pass, $this -> db_name);
			
			$result = $this -> connect -> query("SELECT email FROM firmy");
			while($row = $result -> fetch_assoc())
				array_push($this -> emails, $row['email']);
		}
	}
	/*
	$baza = new EmailDatabase();
	foreach($baza -> emails as $value)
	echo $value.', ';
	*/
?>