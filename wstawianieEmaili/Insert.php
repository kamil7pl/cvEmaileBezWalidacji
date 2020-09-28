<?php
class Insert //funkcja zwracająca nazwę pliku
{
		private $db_host = 'localhost';
		private $db_user = 'root';
		private $db_pass = '';
		private $db_name = 'cvemaile';
		private $connect;
		
	public function __construct($email, $name)
	{
		$this -> connect = new mysqli($this -> db_host, $this -> db_user, $this -> db_pass, $this -> db_name);
		if($this -> connect -> connect_errno != 0)
		{
			echo 'Błąd połączenia. Nr błędu: '.$this -> connect -> connect_errno;
			//$this -> connect -> close();
			exit();
		}
		
		//echo 'Wstaw '.$email.' oraz '.$name;
		$result = $this -> connect -> query("SELECT * FROM firmy WHERE email = '$email'");
		if($result -> num_rows >0){
			echo 'Taki e-mail już istnieje w bazie.<br /><br /> <a href = "index.php">Powrót</a>';
			exit();
		}
		
		$this -> connect -> query("INSERT into firmy VALUES(NULL, '$email', '$name')");
		echo 'Wstawiono e-maila: '.$email.'. <br /><br /><a href = "index.php">Powrót</a>';
		
		
	}
}

//$insert = new Insert('x71.pl@gmail.com', 'Kamil');
?>