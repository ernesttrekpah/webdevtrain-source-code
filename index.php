<?php 

session_start();


?>

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

    <div class="container-fluid">
    	<div class="container-fluid">

    		<div class="row g-0">

    			<div class="col-md-4 left-content">

    				<img src="./assets/images/p1.jpg" class="img-fluid ">
    				
    			</div>

    			<div class="col-md-4 my-3  offset-md-2">

	    				<h2>Kindly fill in your Details</h2>
	    				<p
	    				 class="mb-4"> Get better at HTML, CSS and Javascript <br> in just six(6) weeks</p>

						<!-- Error display -->

						 <small>
	    				 	<?php
		    				 	if(isset($_SESSION['already-registered-error']) && !empty($_SESSION['already-registered-error'])){
		    				 		?>
		    				 		<div class="alert alert-danger"><?=$_SESSION["already-registered-error"]?></div>
		    				 		<?php 

		    				 		unset($_SESSION['already-registered-error']);
		    				 	}else{
		    				 		$_SESSION['already-registered-error']="";
		    				 	}
	    				 	?>
	    				 </small>

	    				 <!-- Registration success display -->

						 <small>
	    				 	<?php 
		    				 	if(isset($_SESSION['register-success']) && !empty($_SESSION['register-success'])){
		    				 		?>
		    				 		<div class="alert alert-success"><?=$_SESSION["register-success"]?></div>
		    				 		<script>alert('Kindly make payment to either numbers: \n\n0540136934 (Ernest Trekpah)\n0558540812 (Elijah Kwachie Junior)\n\nUse DevTrain as reference.\n\nThanks')</script>
		    				 		<?php

		    				 		unset($_SESSION['register-success']);
		    				 	}else{
		    				 		$_SESSION['register-success']="";
		    				 	}
	    				 	?>
	    				 </small>


    				<form method="post" action="./process.php">

			    	<div class="mb-3 ">
						  <label for="fullName" class="form-label">Full Name</label>
						  <input name="full-name" type="text" class="form-control rounded-0" id="fullName" placeholder="Enter your full name" >

						  <!-- Error Message -->
						  <small class="text-danger">
	    				 	<?php 
		    				 	if(isset($_SESSION['full-name-empty']) && !empty($_SESSION['full-name-empty'])){
		    				 		print $_SESSION['full-name-empty'];

		    				 		unset($_SESSION['full-name-empty']);
		    				 	}else{
		    				 		$_SESSION['full-name-empty']="";
		    				 	}
	    				 	?>
	    				 </small>

						</div>

						<div class="mb-3 ">
						  <label for="phone" class="form-label">Phone</label>
						  <input name="phone" type="number" class="form-control rounded-0" id="phone" placeholder="Enter your phone number"  min="10"  >

						  <!-- Error Message -->
						  <small class="text-danger">
	    				 	<?php 
		    				 	if(isset($_SESSION['phone-empty']) && !empty($_SESSION['phone-empty'])){
		    				 		print $_SESSION['phone-empty'];

		    				 		unset($_SESSION['phone-empty']);
		    				 	}else{
		    				 		$_SESSION['phone-empty']="";
		    				 	}
	    				 	?>
	    				 </small>

						</div> 

						<div class="mb-3 ">
						  <label for="email" class="form-label">Email</label>
						  <input name="email" type="email" class="form-control rounded-0" id="email" placeholder="Enter your official email" >


						  <!-- Error Message -->
						  <small class="text-danger">
	    				 	<?php 
		    				 	if(isset($_SESSION['email-empty']) && !empty($_SESSION['email-empty'])){
		    				 		print $_SESSION['email-empty'];

		    				 		unset($_SESSION['email-empty']);
		    				 	}else{
		    				 		$_SESSION['email-empty']="";
		    				 	}
	    				 	?>
	    				 </small>


						</div>

						<div class="mb-3 ">
						  <label for="department" class="form-label">Department</label>
						  <input name="department" type="text" class="form-control rounded-0" id="deparment" placeholder="Enter your department" >

						  <!-- Error Message -->
						  <small class="text-danger">
	    				 	<?php 
		    				 	if(isset($_SESSION['department-empty']) && !empty($_SESSION['department-empty'])){
		    				 		print $_SESSION['department-empty'];

		    				 		unset($_SESSION['department-empty']);
		    				 	}else{
		    				 		$_SESSION['department-empty']="";
		    				 	}
	    				 	?>
	    				 </small>


						</div>

							<div class="row">
							
								<div class="col-md-12">
								<div class="mb-3 ">
								  <button name="btn_register" type="submit" class="btn btn-dark rounded-0 w-100 ">&rarr;   Submit</button>
								</div>

									
								</div>

							</div>



    				</form>

    			</div>


    		</div>

    	</div>
    	
    </div>	


  </body>
</html>
















<?php 



// print "<pre>";
// var_dump($_SERVER);
// print "</pre>";







?>