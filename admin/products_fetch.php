<?php
	include 'includes/session.php';

	$output = '';

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM product");
	$stmt->execute();

	foreach($stmt as $row){
		$output .= "
			<option value='".$row['ID']."' class='append_items'>".$row['Name']."</option>
		";
	}

	$pdo->close();
	echo json_encode($output);
?>