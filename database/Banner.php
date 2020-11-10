<?php
class Banner
{
	
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}

	public function getData($table){
		$result =$this->db->con->query("SELECT * FROM ($table) WHERE Status='1'");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}

}

?>