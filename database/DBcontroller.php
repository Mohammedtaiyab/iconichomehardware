<?php
class DBcontroller
{
	
	protected $host ='localhost';
	protected $user='marketi1_OJO';
	protected $password="Marketing@52";
	protected $database="marketi1_iconichomehardware";

	public $con=null;
public function __construct(){
 	$this->con =mysqli_connect($this->host,$this->user,$this->password,$this->database);
 	if($this->con->connect_error){
 		echo "Fail".$this->con->connect_error;
 	}
 	//echo "Connection Successfull!";
}


public function __destruct(){
 $this->closeConnection();
}
protected function closeConnection(){
	if($this->con!=null){
		$this->con->close();
		$this->con=null;
	}
}
}

?>