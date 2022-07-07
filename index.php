<?php 
session_start();

?>







<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration | Website Development Training</title>

    <link rel="shortcut icon" href="./assets/images/favi1.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/animate/animate.min.css"> 

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/app.css">

    <!-- Bootstrap Script -->
    <script defer type="text/javascript" src="./assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Custom Js -->
    <script defer type="text/javascript" src="./assets/js/app.js"></script>


</head>

<body>

    <div class="container-fluid p-0">

        <div class="row g-0">
            <div class="col-md-4 left-content">
                <img src="./assets/images/p1.jpg" class="img-fluid left-image">
            </div>

            <div class="col-md-4 my-3 fixed offset-md-2 right-content animate__animated animate__slideInDown  ">

                <h2>Kindly fill in your Details</h2>
                <p class="mb-4"> Get better at HTML, CSS and Javascript <br> in just six(6) weeks</p>

                <!-- Error display -->

                <small>
                    <?php
                    if(isset($_SESSION['already-registered-error']) && !empty($_SESSION['already-registered-error'])){ ?>
                    <div class="alert alert-danger"><?=$_SESSION["already-registered-error"]?></div>
                    <?php unset($_SESSION['already-registered-error']);
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
                  
                    <?php
                    unset($_SESSION['register-success']);
                }else{
                    $_SESSION['register-success']="";
                }
                ?>
                </small>

                <form method="POST" action="./process.php" class="needs-validation "  novalidate>
                    <div class="mb-3">
                        <label class="mb-2 text-muted" for="full-name">Full Name</label>
                        <input id="full-name" type="text" class="form-control  rounded-pill  p-2" name="full-name"
                            value="" required autofocus style="box-shadow:none;">
                        <div class="invalid-feedback">
                            Full name is required
                        </div>
                    </div>

                    <div class="mb-3">

                        <div class="mb-2 w-100">
                            <label class="form-label" for="phone">Phone</label>
                        </div>
                        <input id="phone" type="number" class="form-control rounded-pill  p-2" name="phone" 
                            required style="box-shadow:none;">
                        <div class="invalid-feedback">
                            Phone is required
                        </div>
                    </div>


                    <div class="mb-3">
                        <div class="mb-2 w-100">
                            <label class="text-muted" for="email">Email</label>
                        </div>
                        <input id="email" type="email" class="form-control rounded-pill  p-2" name="email" 
                            required style="box-shadow:none;">
                        <div class="invalid-feedback">
                           Email is required
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="mb-2 w-100">
                            <label class="text-muted" for="department">Department</label>
                        </div>
                        <input id="department" type="text" class="form-control rounded-pill  p-2" name="department"
                            value required style="box-shadow:none;">
                        <div class="invalid-feedback">
                            Department is required
                        </div>
                    </div>



                    <div class="mb-3 ">

                        <label for="level" class="form-label">Level</label>
                        <select name="level" class="form-select   rounded-pill p-2" aria-label="level" id="level">
                        <option selected disabled value="">Select your level</option>
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="400">400</option>

                        </select>

                        <div class="invalid-feedback">
                            Select level
                        </div>


                    </div>



                    <div class="row">

                        <div class="col-md-12">
                            <div class="mb-3 ">
                                <button name="btn_register" type="submit"
                                    class="btn btn-dark rounded-pill p-2  w-100 ">&rarr; Submit</button>
                            </div>


                        </div>

                    </div>
                </form>

            </div>


        </div>

    </div>





</body>

</html>

<?php 

            // else:

// header("location:payment.php");

// endif;

?>
