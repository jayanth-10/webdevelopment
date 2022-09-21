<?php
$name= $_POST['user'];
session_start();
$_SESSION['name']= $_POST['user'];
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'nbkr';
$con=mysqli_connect($host,$user,$pass,$db);
$query="select * from studentlogin where username = '$name' ;";
$result=mysqli_query($con,$query);
$out = mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome-5.8.1.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <title>NBKR</title>
</head>
<body>

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="student.php" class="navbar-brand text-warning">
               <i class="fa fa-university"></i> NBKRIST
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#ui-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="ui-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="fa fa-chart-bar text-muted"></i> NBKR TRANSPORTATION MANAGEMENT</a>
                    </li>
                   
                   
                   
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                            <i class="fa fa-sign-in-alt text-muted"></i><?php
                            echo $name; ?></a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="main.php">
                            <i class="fa fa-sign-out-alt text-muted"></i> LogOut</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dashboard Section -->
    <section class="p-2 bg-teal text-white">
        <div class="container">
            <div class="row">
                <h1 class="animated flipInY">
                   <i class="fa fa-chart-bar"></i> STUDENT PANEL</h1>
            </div>
        </div>
    </section>
 

   
    <!-- Main Content Section -->
    <section class="p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card animated zoomIn delay-2s">
                        <div class="card-header bg-secondary text-white">
                           
                <div class="col-md-3 animated slideInUp delay-3s">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <i class="fa fa-list fa-4x"></i>
                                </div>
                                <div class="col">
                                    <h3 class="display-3">08</h3>
                                    <h6>BUS DETAILS </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <h5>
                                <a href="busdetails.php" class="text-primary">
                                    View Details <i class="fa fa-arrow-alt-circle-right"></i>
                                </a>
                            </h5>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-header bg-warning text-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <i class="fa fa-users fa-4x"></i>
                                </div>
                                <div class="col">
                                    <h3 class="display-3">08</h3>
                                    <h6>students</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <h5>
                                <a href="students.php" class="text-warning">
                                    View Details <i class="fa fa-arrow-alt-circle-right"></i>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Footer -->
    <footer class="p-3 bg-dark text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>NBKR Bus Transportation System | Made with &#10084;&#65039; by BATCH2</h3>
                   
                </div>
            </div>
        </div>
    </footer>


<!-- Bootstrap  JS Files -->
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/mdb.js"></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
</body>
</html>
