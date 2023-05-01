<?php
session_start();

include("variables.php");
$email = $_POST['email'];
$password = $_POST['pass'];
$password = md5($password);

$check = mysqli_query($connect,"select * from users where email='$email' and password='$password'"  );

if (mysqli_num_rows($check)>0){
    $data = mysqli_fetch_array($check);
    $_SESSION['id'] = $data['id'];
    // $_SESSION['status'] = $data['status'];
    $_SESSION['data'] = $data;
    echo '<script>
            window.location = "dashboard.php";
            </script>';

}
else{
    echo '<script>
    alert("Invalid credentials!");
    window.location = "../";
</script>';
}

?>