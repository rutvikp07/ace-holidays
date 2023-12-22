<?php
    include "connect.php";

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $c_pass = $_POST['c_pass'];

    $query= "select * from login where username='$username'" ;
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);
    if($count>0)
        {
            ?>
                    <script>
                        alert("User Already registerd, Log In please");
                        window.location.href='index.html';
                    </script>
            <?php
        }
    else
        {
            if($password === $c_pass){
                $insertq= "INSERT INTO login(username, password, c_pass) VALUES ('$username', '$password', '$c_pass')";
                $iquery= mysqli_query($con,$insertq);
                    if($iquery){
                        ?>
                        <script>
                            alert("Successsful");
                            window.location.href='https://aceholidays07.000webhostapp.com/home.html';
                        </script>
                        <?php
                    }else{
                        ?>
                        <script>
                            alert("User Already registerd, Log In please");
                            window.location.href='https://aceholidays07.000webhostapp.com/index.html';
                        </script>
                        <?php
                    }
            }
            else{
                echo "Password is not matching!!";
            }
        }
    }
?>