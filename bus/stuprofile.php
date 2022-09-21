<?php
$con = mysqli_connect('localhost','root','','nbkr');
session_start();
$name =$_SESSION['name'];
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
        <a href="index.html" class="navbar-brand text-warning">
            <i class="fa fa-university"></i> NBKRIST
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#ui-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="ui-navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="fa fa-chart-bar text-muted"></i> NBKR Transportation MANAGEMENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="busdetails.php">
                        <i class="fa fa-list text-muted"></i> bus details</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="students.html">
                        <i class="fa fa-users text-muted"></i> students</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown">
                        <i class="fa fa-sign-in-alt text-muted"></i> Student</a>
                    <div class="dropdown-menu p-2">
                        <a href="profile.html" class="dropdown-item">
                            <i class="fa fa-user-circle"></i> Profile</a>
                        <a href="settings.html" class="dropdown-item">
                            <i class="fa fa-cogs"></i> Settings</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">
                        <i class="fa fa-sign-out-alt text-muted"></i> LogOut</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Profile Section -->
<section class="p-2 bg-teal text-white">
    <div class="container">
        <div class="row animated flipInY">
            <h1>
                <i class="fa fa-user-circle"></i> Profile</h1>
        </div>
    </div>
</section>

<!-- Buttons Section -->
<section class="p-3 bg-light">
    <div class="container">
        <div class="row animated flipInX">
            <div class="col-md-3">
                <a href="student.php" class="btn btn-secondary btn-block">
                   <i class="fa fa-arrow-alt-circle-left"></i> Dashboard
                </a>
            </div>
            <div class="col-md-3">
                <!-- Empty -->
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#password-modal">
                    <i class="fa fa-lock"></i> Update Password
                </a>
            </div>
            
        </div>
    </div>
</section>

<!-- Password Modal -->
<div class="modal" id="password-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated flipInY">
            <div class="modal-header bg-primary text-white">
                <h3>Update Password</h3>
                <button class="close" data-dismiss="modal">
                    <i class="fa fa-times-circle"></i>
                </button>
            </div>
            <div class="modal-body bg-light">
                <form>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Old Password" >
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Update Password">
                        <a href="#" data-dismiss="modal" class="btn btn-dark">close</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Main Profile Section -->
<section class="p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card animated jello">
                    <div class="card-header bg-teal text-white">
                        <h3>MY Details</h3>
                    </div>
                    <div class="card-body bg-light">
                        <div class="card">
                            <div class="card-body">
                                <h2><?php echo $name;?></h2>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias distinctio eum exercitationem ipsam itaque iure modi non voluptatibus. Consequuntur, praesentium, repellendus. Consectetur dicta dolorem nostrum quos vel voluptates? Similique, voluptate!</p>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus dolor doloribus ducimus eius itaque libero quasi, quis quod repellendus ullam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <h3>Thank You!</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card animated slideInUp">
                    <div class="card-header bg-teal text-white text-center">
                        <h5><?php echo $name;  ?></h5>
                    </div>
                    <div class="card-body">
                        <img src="images/jayanth.png" class="img-fluid img-thumbnail p-image" alt="">
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-primary btn-block mt-3">
                                   <i class="fa fa-pen-alt"></i> Edit Profile</button>
                                
                            </div>
                        </div>
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
                <h3><h3>NBKR Bus Transportation System | Made with &#10084;&#65039; by BATCH2</h3></h3>
                
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
