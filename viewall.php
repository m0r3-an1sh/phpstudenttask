<?php
include("variables.php");


$sql = "  SELECT  student.name, student.telno, student.emailid, student.dob, class.floor, class.classname, class.noofstudent, teacher.teachname, teacher.cityname
FROM class
INNER JOIN teacher ON class.teachid = teacher.id
INNER JOIN student ON class.id = student.classid; ";

$result = mysqli_query($connect,$sql);

$out='';


echo "<table>";
echo "
<tr>
<th>studentname</th>
<th>studenttelno</th>
<th>studentemail</th>
<th>studentdob</th>
<th>classfloor</th>
<th>classname</th>
<th>classnoofstuds</th>
<th>teachername</th>
<th>teachercity</th>
</tr>";
while($row = mysqli_fetch_assoc($result)) 
{   
    $studentname = $row['name'];
    $studenttelno = $row['telno'];
    $studentemail = $row['emailid'];
    $studentdob = $row['dob'];
    $classfloor = $row['floor'];
    $classname = $row['classname'];
    $classnoofstuds = $row['noofstudent'];
    $teachername = $row['teachname'];
    $teachercity = $row['cityname'];


    // echo "studentName: " .$studentname. "<br>";
    // echo "studenttelno: " . $studenttelno . "<br>";
    // echo "studentemail: " . $studentemail . "<br>";
    // echo "studentdob: " . $studentdob . "<br>";
    // echo "classfloor: " . $classfloor . "<br>";
    // echo "classname: " . $classname . "<br>";
    // echo "classname: " . $classnoofstuds . "<br>";
    // echo "teachername: " . $teachername . "<br>";
    // echo "teachercity: " . $teachercity . "<br>";

    echo "
    <tr>
    <td>$studentname</td>
    <td>$studenttelno</td>
    <td>$studentemail</td>
    <td>$studentdob</td>
    <td>$classfloor</td>
    <td>$classname</td>
    <td>$classnoofstuds</td>
    <td>$teachername</td>
    <td>$teachercity</td>
    </tr>
    ";

}


?>