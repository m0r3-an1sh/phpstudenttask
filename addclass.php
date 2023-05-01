<?php
session_start();

include("variables.php");
$classname = $_POST['classname'];
$floor = $_POST['floor'];
$selectID = $_POST['selectID'];
$nostudent = $_POST['nostudent'];

$check = mysqli_query($connect,"insert into class (classname,floor,noofstudent,teachid) values ('$classname','$floor','$noofstudent','$selectID')"  );

echo '<script>
alert("class addition success");
window.location = "class.php";
</script>';
?>