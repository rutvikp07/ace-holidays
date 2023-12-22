<html>
<link rel="stylesheet" href="login.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <body>
        <div class="login">
    <h1><center>DELETE TOUR</center></h1>
    <form class="login_form" method="POST">
                DESTINATION NAME: <br>
                <input type="text" name="destination_name" placeholder="Enter destination name" required > <br>
                <input type="submit" class="submit" name="delete" value="DELETE" >  <br>
    </form>
    </div>


<?php
    include "connect.php";
    if(isset($_POST['delete'])){
        $dest_name=$_POST['destination_name'];

        $search = "SELECT * FROM packages WHERE des_name='$dest_name'";
        $query = mysqli_query($con,$search);
        $result = mysqli_num_rows($query);
        if($result>0){
            $delete = "DELETE FROM packages WHERE des_name='$dest_name'";
            $q_delete = mysqli_query($con,$delete);
        }
        else{
            echo "No destination found";
        }
    }
?>