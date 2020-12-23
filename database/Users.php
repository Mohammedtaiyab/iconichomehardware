<?php
class Users
{
	
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}



	public function register($name,$phone,$email,$password){
 
			$sql="SELECT * FROM user WHERE Email='$email'";
 
			//checking if the username or email is available in db
			$check =  $this->db->con->query($sql) ;
			$count_row = $check->num_rows;
 
			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$password = md5($password);
				$sql1="INSERT INTO user(Name,Password,Email,Mobile) VALUES ('$name','$password','$email',$phone)";
				$result = mysqli_query($this->db->con,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
				 $_SESSION['login'] = true;
	              $_SESSION['customermail'] = $email;
	               $_SESSION['userId']=$this->getuserid($email);
	               echo  $_SESSION['userId'];
        		return $result;
			}
			else { 
				 $_SESSION['error']="Registeration Error";
				return false;}
		}





		public function login($email, $password){
			$password = md5($password);
			$sql2="SELECT * from user WHERE Email='$email'and Password='$password'";
 
			//checking if the username is available in the table
        	$result = mysqli_query($this->db->con,$sql2);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;
 
	        if ($count_row == 1) {
	            // this login var will use for the session thing
	            $_SESSION['login'] = true;
	            $_SESSION['customer'] = $user_data['Name'];
	               $_SESSION['customermail']=$user_data['Email'];
	                $_SESSION['userId']=$user_data['ID'];

	            return true;
	        }
	        else{
	        	 $_SESSION['error']="Login Error";
			    return false;
			}
    	}

public function getaddress($userID){
	//$sq="SELECT * FROM address WHERE UserId=".$userID;
		$result =$this->db->con->query("SELECT * FROM address WHERE UserId=".$userID);
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		
		return $resultArray;
	}

public function setstatus($id,$userId){

		$result =$this->db->con->query("UPDATE address SET Status=0  WHERE UserId=".$userId);
		$result =$this->db->con->query("UPDATE address SET Status=1  WHERE Id=".$id);
	
		return true;
	}
	public function getaddressbyid($ID){
		$result =$this->db->con->query("SELECT * FROM address WHERE Id=($ID)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
public function getuserid($usermail){
	$sql="SELECT * FROM user WHERE Email='$usermail'";
 			//checking if the username or email is available in db
			$check =  $this->db->con->query($sql) ;
		$resultArray=array();
		while ($item=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
	}
	return $resultArray[0]['ID'];
}

public function profile($id){
	$sql="SELECT * FROM user WHERE ID='$id'";
 			//checking if the username or email is available in db
			$check =  $this->db->con->query($sql) ;
		$resultArray=array();
		while ($item=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
	}
	return $resultArray;
}
public function updateuser($name,$gender,$phone,$userId){
	$sql="UPDATE user SET Name='".$name."', Gender='".$gender."',Mobile=".$phone." WHERE ID=".$userId;
 			//checking if the username or email is available in db
	
			$check =  $this->db->con->query($sql) ;
		
	return $check;
}
public function address($name,$address,$address2,$phone,$area,$block,$office,$userID){
	
			$status=0;	
				$sql ="SELECT * FROM address WHERE UserId=($userID)";
				$check =  $this->db->con->query($sql) ;
			$count_row = $check->num_rows;
			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$status=1;
			}

		$sql1="INSERT INTO address(UserId,Name,Address,Address2,Phone,Area,Block,Office,Status) VALUES ('$userID','$name','$address','$address2',$phone,'$area','$block','$office','$status')";
				$result = mysqli_query($this->db->con,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
		
		}
			public function usercart($userId){
		$result =$this->db->con->query("SELECT * FROM cart WHERE user_id=($userId)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}

	public function usercartdelete($userId){
		$result =$this->db->con->query("DELETE FROM cart WHERE user_id=".$userId);
		return true;
	}
	// public function register($name,$phone,$email,$password){

	// $check =$this->db->con->query("SELECT * FROM user WHERE Email='$email'");
	
	// $checkuser=mysqli_fetch_array($check,MYSQLI_ASSOC);
	// if($checkuser->num_rows>0){
	// 	echo "in here";
	// 		return false;
	// }else{
	// 	echo "in here also";
	// $result =$this->db->con->query("INSERT INTO user(Name,Password,Email,Mobile) VALUES ('$name','$password','$email',$phone)");
	// 	// $resultArray=array();
	// 	// while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	// 	// 	$resultArray[]=$item;
	// 	// 	# code...
	// 	// }
	// 	// return $resultArray;

	// 	$registeruser=mysqli_fetch_array($result,MYSQLI_ASSOC);
	// 	return $registeruser;
	// }
	// // 	$resultiArray=array();
	// // 	while ($itemi=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
	// // 		$resultiArray[]=$item;
	// // 		# code...
	// // 	}
	// // 	//print_r($resultArray);
	// // 	if(count($resultiArray)==0){
						
	// // $result =$this->db->con->query("INSERT INTO user(Name,Password,Email,Mobile) VALUES ('$name','$password','$email',$phone)");
	// // 	$resultArray=array();
	// // 	while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	// // 		$resultArray[]=$item;
	// // 		# code...
	// // 	}
	// // 	return $resultArray;
	// // 	}else{
	// // 	return $resultiArray;
	// // 	}
	
	// }
	


public function addressdelete($id){
		$result =$this->db->con->query("DELETE FROM address WHERE Id=".$id);
		return true;
	}

}

?>