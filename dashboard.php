<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location: ../machinetest");
}
$data = $_SESSION['data'];

include('variables.php');
?>


<html>

<head>
    <title>student add</title>
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="ajax-script.js" type="text/javascript"></script>


<body>
    <center>
        <a href="index.php"><button id="back-button"> Back</button></a>
        <a href="logout.php"><button id="logout-button">Logout</button></a>
        <h1>student add</h1>

        <form action="studentaddition.php" method="POST">
            <input type="text" name="name" placeholder="Name" required><br><br>
            <input type="number" name="telno" placeholder="Telno" required><br><br>
            <input type="date" name="date" placeholder="date" max="<?php echo date('Y-m-d', strtotime('-18 years')); ?>" required><br><br>
            <input type="email" name="email" placeholder="email" required><br><br>

            <!-- <select id="classid" name="classid" onchange="showUser(this.value)">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>

            <select id="teachid" name="teachid">
            </select> -->

            <select class="form-select" name="selectID" id="selectID">
                <option>Class ID</option>

                <?php $sql = "SELECT id FROM class";
                $result = mysqli_query($connect, $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?></option>
                <?php } ?>

            </select>

            <select  class="form-select"  name="show" id="show">
            <option>Teach ID</option>
            </select>
                
            <button id="studentaddbtn" type="submit" name="studentaddbtn">Student ADD</button><br><br>

        </form>

    </center>
</body>

<script>
  $(document).ready(function(){
     $('#selectID').change(function(){
      var Stdid = $('#selectID').val(); 
 
      $.ajax({
        type: 'POST',
        url: 'fetch.php',
        data: {id:Stdid},  
        success: function(data)  
         {
            $('#show').html(data);
         }
        });
     });
  });
</script> 

</html>