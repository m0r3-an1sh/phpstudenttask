<?php
session_start();

include("variables.php");

$id = $_POST['id'];
$sql = "  select teachid from class where id = $id ";

$result = mysqli_query($connect,$sql);

$out='';
while($row = mysqli_fetch_assoc($result)) 
{   
    $teach_id = $row['teachid'];
   $out .=  '<option value='.$teach_id.'>'.$teach_id.'</option>'; 
}
 echo $out;


?>