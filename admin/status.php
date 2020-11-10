<?php
	include 'includes/session.php';

	if(isset($_POST['status'])){
		$id = $_POST['id'];
		$table=$_POST['table'];
		 $operation=$_POST['operation'];
    	if($operation=='active'){
    	  $status='1';
    	}else{
    	  $status='0';
  		  }
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("update :table set status='$status' where id='$id'");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Product deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select product to delete first';
	}

	header('location: products.php');
	
?>