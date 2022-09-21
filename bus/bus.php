<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'nbkr';
$con = mysqli_connect($host,$user,$pass,$db);
$plate = $_POST['num'];
$busnum = $_POST['busnum'];
$route = $_POST['routes'];
$stu = $_POST['stu'];
$faculty = $_POST['faculty'];
$sub = $_POST['sub'];
$query = "INSERT INTO bus(numplate,busnum,ROUTES,students,faculty,Subroute) VALUES('$plate','$busnum','$route','$stu','$faculty','$sub');";
$result= mysqli_query($con,$query);
header("Location: index.html");


?>