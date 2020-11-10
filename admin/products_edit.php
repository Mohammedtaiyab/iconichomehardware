<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$slug = slugify($name);
		$category = $_POST['category'];
		$price = $_POST['price'];
		$mrp = $_POST['mrp'];
		$description = $_POST['description'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE product SET Name=:name, Short_desc=:slug, Categories_id=:category,mrp=:mrp,Price=:price, Description=:description WHERE ID=:id");
			$stmt->execute(['name'=>$name, 'slug'=>$slug, 'category'=>$category,'mrp'=>$mrp, 'price'=>$price, 'description'=>$description, 'id'=>$id]);
			$_SESSION['success'] = 'Product updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit product form first';
	}

	header('location: products.php');

?>