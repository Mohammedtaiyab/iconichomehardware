<?php
	include 'includes/session.php';

	$output = '';

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM categories WHERE status ='1'");
	$stmt->execute();

	foreach($stmt as $row){
		$output .= "
			<option value='".$row['id']."' class='append_items'>".$row['Category']."</option>
		";
	}

	$pdo->close();
	echo json_encode($output);

?>