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
    <link rel="stylesheet" href="style1.css">
    <title>NBKR</title>
</head>

<body>

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="main.php" class="navbar-brand text-warning">
                <i class="fa fa-snowflake"></i> NBKRIST
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#ui-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="ui-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">
                            <i class="fa fa-chart-bar text-muted"></i> NBKR TRANSPORTATION MANAGEMENT</a>
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
                   <i class="fa fa-chart-phone"></i> </h1>
            </div>
        </div>
    </section>
    <body>

    
<section class = "contact-section">
  <div class = "contact-bg">

    <h2>contact us</h2>
    <div class = "line">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <p class = "text">NBKRIST was Established in 1979, NBKR Institute of Science & Technology is an Autonomous Institute affiliated to JNT University Anantapur. This Institute is reaccredited by NAAC (UGC) for the second cycle with "A" grade. All B.Tech. courses are accredited by National Board of Accreditation (NBA) under Tier 1. UGC awarded the status of "College with Potential for Excellence (CPE)" to our Institute.</p>
  </div>
  <div class="contact">
  <h2><b>College Managment is managed by:-</b></h2>
  <br>
    <h2 style="text-alogn:center;">Dr.V.Vijaykumar Reddy</h2>
    <table style="width:80%">
     <tr>
        <th rowspan="4"><img src="http://nbkrist.co.in/profiles/EEE/Dr.%20V.V.K%20Reddy.jpg" width="100px" height="100px"></th>
        <td>Designation:-</td>
        <td>Professor & Director</td>  
     </tr>
     <tr>
        <td>Qualification:-</td>
        <td>B.Tech,M.Tech,Ph.D</td>
     </tr>
     <tr>
        <th rowspan="2">Contact:-</th>
        <td>Phone:9505439093</td></tr>
        <tr><td> <a href="mailto:vvkreddy@nbkrist.org">Email</a>
</td></tr>
</tr>
     </table>
     <br>
     <h2><b>Transport Managment is managed by:-</b></h2>
     <br>
<h3>Dr.P.VijayBhaskara Reddy</h3>
<table style="width:80%">
     <tr>
        <th rowspan="4"><img src="http://nbkrist.co.in/profiles/ME/Dr%20P.Vijaya%20Bhaskara%20Reddy.jpg" width="100px" height="100px"></th>
<td>Designation:-</td>
        <td> Associate Professor </td>  
     </tr>
     <tr>
        <td>Qualification:-</td>
        <td>B.Tech,M.Tech,Ph.D</td>
     </tr>
     <tr>
        <th rowspan="2">Contact:-</th>
        <td>9849892117</td></tr>
        <tr><td> <a href="mailto:vijadharma@yahoo.co.in">Email</a>
</td></tr>
</tr>
     </table>

   
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
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail(){
            Email.send({
    Host : "smtp.gmail.com",
    Username : "thotajayanth3822@gmail.com",
    Password : "jayanthchinnu@3116 ",
    To : '20kb1a1252@nbkrist.org',
    From : document.getElamentById("email").value,
    Subject : "New content from enquiry",
    Body : "And this is the body"
}).then(
  message => alert(message)
);  
        }
    </script>
</body>

</html>