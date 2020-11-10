<?php
	include '../includes/conn.php';
	session_start();

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: ../login.php');
		exit();
	}

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
	$stmt->execute(['id'=>$_SESSION['admin']]);
	$admin = $stmt->fetch();

	$pdo->close();
$con=mysqli_connect("localhost","marketi1_OJO","Marketing@52","marketi1_iconichomehardware");
if(isset($_GET['type']) && $_GET['type']!=''){
  $type=$_GET['type'];
  if($type=='status'){
    $operation=$_GET['operation'];
    $table=$_GET['table'];
    $id=$_GET['id'];
    if($operation=='active'){
      $status='1';
    }else{
      $status='0';
    }
    $update_status_sql="update $table set status='$status' where id='$id'";
    mysqli_query($con,$update_status_sql);
  }
}
?>