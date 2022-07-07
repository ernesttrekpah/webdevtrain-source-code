<?php 

session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Instructions | Website Development Training</title>
    <link rel="shortcut icon" href="../assets/images/favi1.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./assets/css/animate/animate.min.css">

    <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/data-tables/datatables.min.css">


    <!-- Bootstrap Script -->
    <script defer type="text/javascript" src="./assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Data Tables -->
    <script defer type="text/javascript" src="./assets/data-tables/datatables.min.js"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/app.css">

    <!-- Custom Js -->
    <script defer type="text/javascript" src="./assets/js/app.js"></script>


</head>

<body oncontextmenu="return false" class="p-image">

    <div style="margin: 200px 0px;" class=" my-3 p-5  animate__animated animate__slideInDown">
        
        <?php if(isset($_SESSION['register-success']) && !empty($_SESSION['register-success'])) :?>
        <div class="text-center p-0">
            <div class="alert alert-success">Registration Successful</div>
        </div>

        <?php
        unset($_SESSION['register-success']);

        else:
            $_SESSION['register-success'] ="";
           
        endif;

        ?>

        <div class="card">
            <div class="card-header text-center text-uppercase bg-info text-white h2">
                Kindly Take Note
            </div>
            <div class="card-body text-center p-5">

                <h3 class="card-text">Kindly make payment to either numbers: <br><br> 0540136934 (Ernest
                    Trekpah)<br>0503777346 (Ernest Trekpah)<br><br>Use <strong>DevTrain</strong> as
                    reference.<br>Thanks</h3><br><br>
                <a href="././" class="btn btn-outline-dark w-50 rounded-pill">Go Back</a>
            </div>
        </div>

    </div>

</body>

</html>

