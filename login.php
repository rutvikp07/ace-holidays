<?php
    include "connect.php";
    



if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $c_pass = $_POST['c_pass'];

    $query="select * from login where username='$username' and password='$password' and c_pass='$c_pass'" ;
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);
    if($count==1)
        {
            ?>
            <script>
                window.location.href='home.html';
            </script>
            <?php

        }
    else
        {
            ?>
            <script>
                alert('No user Exist, Register yourself');
                window.location.href='register.html';
            </script>
            <?php

        }
    
  

    }
?>