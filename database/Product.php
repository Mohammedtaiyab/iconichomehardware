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
		public function popularproducts(){
		$result =$this->db->con->query("SELECT *,p.ID AS proID,sc.id AS subId,tc.id AS topId FROM product p INNER JOIN category sc INNER JOIN categories tc INNER JOIN client c INNER JOIN madein mi on p.Categories_id=sc.id and sc.topcategoryid=tc.id and p.Company=c.Id and p.MadeIn=mi.Id ORDER BY RAND() LIMIT 8");
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
	public function fatchcart($userID){
		$check=$this->db->con->query("SELECT * FROM cart c ,product p WHERE user_id=($userID) AND c.product_id=p.ID");
		$resultArray=array();
		while ($item=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
public function removeitem($userID,$pID){
		$check=$this->db->con->query("DELETE FROM cart WHERE user_id=($userID) AND product_id=($pID) ");
		return $check;
	}

	public function cart($userId,$productId,$quanlity){
		for ($i=0; $i <count($productId); $i++) { 
	$check=$this->db->con->query("SELECT * FROM cart WHERE user_id=($userId) AND product_id=".$productId[$i]);
	$resultArray=array();
		while ($item=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		$id=$resultArray[0]['id'];
	$count_row = $check->num_rows;
	if ($count_row 	!= 0){
	$sql="UPDATE cart SET quantity=".$quanlity[$i]." WHERE id=($id)";
	
	$result = mysqli_query($this->db->con,$sql) or die(mysqli_connect_errno()."Data cannot inserted First");
	
	}else {
	$sql="INSERT INTO cart(user_id,product_id,quantity) VALUES ('$userId',".$productId[$i] .",".$quanlity[$i].")";
	$result = mysqli_query($this->db->con,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
	}

}
}


public function singlecart($userId,$productId,$quanlity){

$check=$this->db->con->query("SELECT * FROM cart WHERE user_id=($userId) AND product_id=".$productId);
	$resultArray=array();
		while ($item=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
	
		$count_row = $check->num_rows;
	if ($count_row 	!= 0){

			$id=$resultArray[0]['id'];
	$sql="UPDATE cart SET quantity=".$quanlity." WHERE id=($id)";
	$result = mysqli_query($this->db->con,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
	
	}else {

	$sql="INSERT INTO cart(user_id,product_id,quantity) VALUES (".$userId.",".$productId .",".$quanlity.")";
	$result = mysqli_query($this->db->con,$sql) or die(mysqli_connect_errno()."Data cannot inserted on cart");
	}
}
}

//SELECT * FROM `product` WHERE Name LIKE '%mobil%'
?>