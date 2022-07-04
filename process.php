
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration | Website Development Training</title>

    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/app.css">

    <!-- Bootstrap Script -->
    <script defer type="text/javascript" src="./assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Custom Js -->
    <script defer type="text/javascript" src="./assets/js/app.js"></script>


  </head>
  <body>



<?php 
//include database configuration
include_once('./database/database.php');

session_start();


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['btn_register'])){

		$fullName = sanitizeData($_POST['full-name']);
		$phone = sanitizeData($_POST['phone']);
		$email = sanitizeData($_POST['email']);
		$department = sanitizeData($_POST['department']);
	


		// Check emptiness
		if(empty($fullName)){
			$_SESSION['full-name-empty']="Please enter fullname";
				header("location:././");
			
		}if(empty($phone)){
			$_SESSION['phone-empty']="Please enter your phone number";
				header("location:././");

		}if(empty($email)){
			$_SESSION['email-empty']="Please enter your email";
				header("location:././");

		}if(empty($department)){
			$_SESSION['department-empty']="Please enter department";
				header("location:././");

		}else
		{


		//Check if records already exist

		try{
			$dsn ="mysql:host=".DBHOST."; dbname=".DBNAME;
				
				$conn = new PDO($dsn, 'root', '');
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$query =$conn->prepare("SELECT full_name, phone from users_tbl where(full_name=:n AND phone=:p)");



				$query->bindParam('n', $fullName);
				$query->bindParam('p', $phone);

				$query->execute();

				$count = $query->rowCount();
				
				$results = $query->fetchAll(PDO::FETCH_BOTH);


				if($count > 0){

					$_SESSION['already-registered-error'] = "Sorry, you have already registered!";

					header("location:././");
					die();


				}else
				{
					//Insert
					$query =$conn->prepare("INSERT INTO users_tbl(full_name, phone, email, department) values(:n,:p,:e,:d)");

					$query->bindParam('n', $fullName);
					$query->bindParam('p', $phone);
					$query->bindParam('e', $email);
					$query->bindParam('d', $department);
			

					//
					$status = $query->execute();

					if($status){
						$_SESSION['register-success'] ="Registration successful";

						header("location:././");
						die();

					}
				}

				}catch(PDOException $e){
			die('Error occured: '. $e->getMessage());
		 }

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


  </body>
</html>