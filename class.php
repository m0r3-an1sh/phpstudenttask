<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MACHINE TEST</title>
</head>

<?php

include('variables.php');
?>


<body>
    <center>
        <h1>add class</h1>
    </center>

    <form action="addclass.php" method="post">
        <input type="text" name="classname" placeholder="classname" required><br><br>
        <input type="number" name="floor" placeholder="floor" required><br><br>
        <input type="number" name="nostudent" placeholder="nostudent" required><br><br>
        <select class="form-select" name="selectID" id="selectID">
                <option>Teacher ID</option>

                <?php $sql = "SELECT id FROM teacher";
                $result = mysqli_query($connect, $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?></option>
                <?php } ?>

            </select>

        <button id="registerbtn" type="submit" name="registerbtn">add class</button><br><br>
    </form>