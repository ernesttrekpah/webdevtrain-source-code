<?php

session_start();

//ini_set("display_errors",0 );


//include database configuration
include_once('./database/database.php');


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['btn_register'])){

		$fullName = sanitizeData($_POST['full-name']);
		$phone = sanitizeData($_POST['phone']);
		$email = sanitizeData($_POST['email']);
		$department = sanitizeData($_POST['department']);
		$level = sanitizeData($_POST['level']);
	


		//Check if records already exist

		try{
			$dsn ="mysql:host=".DBHOST."; dbname=".DBNAME;
				
				$conn = new PDO($dsn, 'root', '');
				// print 'connected';
			
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$query =$conn->prepare("SELECT full_name, phone from users_tbl where(full_name=:n AND phone=:p)");



				$query->bindParam('n', $fullName);
				$query->bindParam('p', $phone);

				$query->execute();

				$count = $query->rowCount();
				
				$results = $query->fetchAll(PDO::FETCH_BOTH);


				if($count > 0){

					$_SESSION['already-registered-error'] = "Sorry, you have already registered!";

					die(header("location:././"));
					

				}else
				{
					//Insert
					$query =$conn->prepare("INSERT INTO users_tbl(full_name, phone, email, department, level) values(:n,:p,:e,:d,:l)");

					$query->bindParam(':n', $fullName);
					$query->bindParam(':p', $phone);
					$query->bindParam(':e', $email);
					$query->bindParam(':d', $department);
					$query->bindParam(':l', $level);
			

					//
					$status = $query->execute();

					if($status){
						$_SESSION['register-success'] ="Registration successful";

						header("location:././payment.php");
				
					}
				}

		}catch(PDOException $e){
		die('Error occured: '. $e->getMessage());
		session_destroy();
	 }

			}


		}




// Sanitize function
function sanitizeData($input)
{
	$input = htmlspecialchars($input);
	$input = htmlentities($input);
	$input = trim($input);
	$input = addslashes($input);
	return $input;

}

?>