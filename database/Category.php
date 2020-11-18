<?php
class Category
{
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}

	public function getData($table = 'category'){
		$result =$this->db->con->query("SELECT * FROM ($table)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function getdatabyId($id){
		$result =$this->db->con->query("SELECT * FROM category WHERE id=($id)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}

	public function topcategory($table = 'categories'){
		$result =$this->db->con->query("SELECT * FROM ($table)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function subcategorybyid($id){
		$result =$this->db->con->query("SELECT * FROM category WHERE topcategoryid=($id)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
		public function getDatacountry($table = 'madein'){
		$result =$this->db->con->query("SELECT * FROM ($table)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function getDatabrand($table = 'client'){
		$result =$this->db->con->query("SELECT * FROM ($table)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
}


?>