<?php
session_start();

include("variables.php");
$email = $_POST['email'];
$password = $_POST['pass'];
$password = md5($password);

$check = mysqli_query($connect,"insert into users (email,password) values ('$email','$password')"  );

echo '<script>
alert("registration success");
window.location = "../machinetest/";
</script>';
?>