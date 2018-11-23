<?php 
class dbh{
	private $servername;
	private $username;
	private $password;
	private $name;
	
	public function connect(){
		$this->servername="localhost";
		$this->username="oop";
		$this->password="godisbigest";
		$this->name="journalproject";
		try{
			$dsn="mysql:host=".$this->servername.";name:".$this->name;
			$pdo=new PDO($dsn,$this->username,$this->password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			echo "connect";
			return $pdo;

			}catch(PDOException $e){
				echo "connection failed".$e->getMessage();
			}

	}	
}
?>