<?php
session_start();

include("variables.php");
$name = $_POST['name'];
$telno = $_POST['telno'];
$date = $_POST['date'];
$email = $_POST['email'];
$classid = $_POST['selectID'];
$teachid = $_POST['show'];


$insert = mysqli_query($connect,"insert into student (name, telno, dob, emailid, teachid, classid) values ('$name','$telno','$date','$email','$teachid','$classid')"  );


header("location: ../machinetest/dashboard.php");
?>