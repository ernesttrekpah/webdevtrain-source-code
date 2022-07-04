
<?php 

include_once('../database/database.php');

// 

try{
			$dsn ="mysql:host=".DBHOST."; dbname=".DBNAME;
				
				$conn = new PDO($dsn, 'root', '');
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$query =$conn->prepare("SELECT * from users_tbl ORDER BY date_created ASC");

				$query->execute();

				$count = $query->rowCount();

				$results = $query->fetchAll(PDO::FETCH_BOTH);

			
				}catch(PDOException $e){
			die('Error occured: '. $e->getMessage());
		 }



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registered Members | Website Development Training</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/bootstrap.min.css">
    <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/data-tables/datatables.min.css">


   

    <!-- Bootstrap Script -->
    <script defer type="text/javascript" src="../assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Data Tables -->
      <script defer type="text/javascript" src="../assets/data-tables/datatables.min.js"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/app.css">

    <!-- Custom Js -->
    <script defer type="text/javascript" src="../assets/js/app.js"></script>


  </head>
  <body>

    <div class="container-fluid">
    	<div class="container-fluid">

    		<div class="row g-0">

    			<div class="col-md-4">

    				<img src="../assets/images/p1.jpg" class="img-fluid ">
    				
    			</div>

    			<div class="col-md-4 my-3  offset-md-2">

	    				<h2>Registered Members</h2>


					    <!-- Table -->

					    <?php

					    if($count > 0):?> 

					    <table id="data-table" class="table table-striped  display">
						    <thead>
						        <tr>
						            <th>ID</th>
						            <th>Fullname</th>
						            <th>Phone</th>
						            <th>Email</th>
						            <th>Department</th>
						            <th>Date Created</th>
						            <th>Action</th>
						        </tr>
						    </thead>
						    <tbody>

						    	<?php foreach ($results as $row):?>
						    	
						        <tr>
						            <td><?=$row['id']?></td>
						            <td><?=$row['full_name']?></td>
						            <td><?=$row['phone']?></td>
						            <td><?=$row['email']?></td>
						            <td><?=$row['department']?></td>
						            <td><?=$row['date_created']?></td>
						            <td><a href="<?=$row['id']?>"></a></td>
						           
						        </tr>

						        <?php
						     	endforeach;
						    ?>

						        
						    </tbody>
							</table>

							<?php

						else:

							print "<h2 class='text-info'>No registered members yet!</h2>";

						endif;

						?>

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