<?php
class Product
{
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}

	public function getData($table = 'product'){
		$result =$this->db->con->query("SELECT * FROM ($table)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function singleProduct($id){
		$result =$this->db->con->query("SELECT *,p.ID AS proID,sc.id AS subId,tc.id AS topId FROM product p INNER JOIN category sc INNER JOIN categories tc INNER JOIN client c INNER JOIN madein mi on p.Categories_id=sc.id and sc.topcategoryid=tc.id and p.Company=c.Id and p.MadeIn=mi.Id WHERE p.ID=($id)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
		public function Productcategory(){
		$result =$this->db->con->query("SELECT * FROM product WHERE Categories_id IN (SELECT DISTINCT Categories_id FROM product) GROUP BY Categories_id");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function Productbycategory($id){
		$result =$this->db->con->query("SELECT *,p.ID AS proID,sc.id AS subId,tc.id AS topId FROM product p INNER JOIN category sc INNER JOIN categories tc INNER JOIN client c INNER JOIN madein mi on p.Categories_id=sc.id and sc.topcategoryid=tc.id and p.Company=c.Id and p.MadeIn=mi.Id WHERE Categories_id=($id)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function Productbycountry($id){
		$result =$this->db->con->query("SELECT *,p.ID AS proID,sc.id AS subId,tc.id AS topId FROM product p INNER JOIN category sc INNER JOIN categories tc INNER JOIN client c INNER JOIN madein mi on p.Categories_id=sc.id and sc.topcategoryid=tc.id and p.Company=c.Id and p.MadeIn=mi.Id WHERE p.MadeIn=($id)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function Productbybrand($id){
		$result =$this->db->con->query("SELECT *,p.ID AS proID,sc.id AS subId,tc.id AS topId FROM product p INNER JOIN category sc INNER JOIN categories tc INNER JOIN client c INNER JOIN madein mi on p.Categories_id=sc.id and sc.topcategoryid=tc.id and p.Company=c.Id and p.MadeIn=mi.Id WHERE p.Company=($id)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function productgallery($id){
		$result =$this->db->con->query("SELECT * FROM gallery WHERE Product_Id=($id)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function productbyname($name){
		$result =$this->db->con->query("SELECT * FROM product WHERE Name LIKE '%$name%'");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
		public function productsall(){
		$result =$this->db->con->query("SELECT *,p.ID AS proID,sc.id AS subId,tc.id AS topId FROM product p INNER JOIN category sc INNER JOIN categories tc INNER JOIN client c INNER JOIN madein mi on p.Categories_id=sc.id and sc.topcategoryid=tc.id and p.Company=c.Id and p.MadeIn=mi.Id");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function productapi($table = 'product'){
		$result =$this->db->con->query("SELECT ID,Name,Price FROM ($table)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return json_encode($resultArray);
	}
}

//SELECT * FROM `product` WHERE Name LIKE '%mobil%'
?>