<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'nbkr';
$con = mysqli_connect($host,$user,$pass,$db);
$roll=$_POST['roll'];
$name=$_POST['name'];
$mail=$_POST['mail'];
$branch=$_POST['branch'];
$phone=$_POST['phone'];
$place=$_POST['place'];
$amount=$_POST['amount'];
$query = "INSERT INTO students(rollno,name,branch,mail,phone,place,amount) VALUES('$roll','$name','$branch','$mail','$phone','$place','$amount');";
$result= mysqli_query($con,$query);
header("Location: index.html");


?>