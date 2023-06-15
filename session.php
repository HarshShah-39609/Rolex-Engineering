<?php
	include 'connection.php';
	session_start();
	$_SESSION['counter']=1;
	// if(isset($_SESSION['admin'])){
	// 	header('location: admin/home.php');
	// }

	if(isset($_SESSION['uemail']))
	{
		
		
		// $conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM user_detail WHERE User_Email=:$email");
			$stmt->execute(['id'=>$_SESSION['email']]);
			$user = $stmt->fetch();
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
	}
?>