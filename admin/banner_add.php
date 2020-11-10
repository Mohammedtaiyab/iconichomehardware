<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['add'])){
		$topic = $_POST['topic'];
		$header = $_POST['header'];
		$paragraph = $_POST['paragraph'];
		$goto=$_POST['goto'];
		$filename = $_FILES['photo']['name'];
		$status='1';
		$conn = $pdo->open();
			if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = rand(111111111,999999999).'.'.$ext;
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/banner/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}

			try{
				$stmt = $conn->prepare("INSERT INTO banner(Topic,Header,Paragraph,Goto,Image,Status) VALUES (:topic, :header, :paragraph, :goto,:photo,:status)");
		$stmt->execute(['topic'=>$topic, 'header'=>$header, 'paragraph'=>$paragraph, 'goto'=>$goto,'photo'=>$new_filename,'status'=>$status]);
				$_SESSION['success'] = 'Banner added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up product form first';
	}

	header('location: banner.php');

?>