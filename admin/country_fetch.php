<?php
	include 'includes/session.php';

	$output = '';

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM madein WHERE Status ='1'");
	$stmt->execute();

	foreach($stmt as $row){
		$output .= "
			<option value='".$row['Id']."' class='append_items'>".$row['Country']."</option>
		";
	}

	$pdo->close();
	echo json_encode($output);

?>