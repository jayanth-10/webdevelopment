<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'nbkr';
$con = mysqli_connect($host,$user,$pass,$db);
$query="select * from bus;";
$result=mysqli_query($con,$query); 

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
                <i class="fa fa-snowflake"></i> NBKRIST
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
                        <a class="nav-link" href="bus details.html">
                            <i class="fa fa-list text-muted"></i> bus details</a>
                    </li>
                    <li class="nav-item">

                        <li class="nav-item">
                            <a class="nav-link" href="students.php">
                                <i class="fa fa-users text-muted"></i> students</a>
                        </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                            <i class="fa fa-sign-in-alt text-muted"></i> jayanth</a>
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

    <!-- bus Section -->
    <section class="p-2 bg-primary text-white">
        <div class="container">
            <div class="row animated slideInLeft">
                <h1>
                    <i class="fa fa-list"></i> BUS DETAILS</h1>
            </div>
        </div>
    </section>

    <!-- bus Search -->
    <section class="p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Empty -->
                </div>
                <div class="col-md-6 animated slideInRight">
                    <form class="form-inline" action="bussrch.php" method='post'>
                        <div class="form-group">
                            <input size="30" type="search" class="form-control" placeholder="BUS-NUM" name='num'>
                        </div>
                        <div>
                            <button type='submit' name='srch' class="btn btn-primary">SEARCH</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- bus Table -->
    <section class="p-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card animated rotateInUpRight">
                        <div class="card-header bg-primary text-white">
                            <h3>Bus Details</h3>
                        </div>
                        <div class="card-body bg-light-blue">
                       
                    <table class='table table-hover text-center'>
                <thead class='bg-dark text-white'>
    <tr>
        <th>NUM-PLATE</th>
        <th>BUS-NUM</th>
        <th>ROUTES</th>
        <th></th>
        <th>NO.OF students</th>
        <th>NO.OF Faculty</th>
        <th>Subroute</th>
                    </tr></thead>
</div>
</div>
                    
                            
 <tbody>
<?php
while($out=mysqli_fetch_assoc($result)){


echo"<tr> <td>{$out['numplate']}</td>
<td>{$out['busnum']}</td>
<td>{$out['ROUTES']}<td>
<td>{$out['students']}</td>
   <td>{$out['faculty']}</td>
 <td>{$out['Subroute']}</td></tr>";
                                      
                                     
                                     
}   
  ?>
                                   
  </tbody>           
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
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>