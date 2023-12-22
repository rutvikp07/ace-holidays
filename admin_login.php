<html>
<title>
    ACE HOLIDAYS | ADMIN LOGIN
</title>
    <link rel="icon" href="LOGO.png">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<div class="login">
            <h1>ADMIN LOGIN</h1>
            <form class="login_form" method="POST">
                Email: <br>
                <input type="text" name="username" placeholder="Enter your emnail" required > <br>
                Password: <br>
                <input type="password" name="password" placeholder="fake pass. only" required> <br>
                <input type="submit" class="submit" name="submit" value="Login" >  
            </form>
        </div>

        <?php
        
        include "connect.php";

        
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            
        
            $query="select * from admin_login where email='$username' and password='$password'" ;
            $result = mysqli_query($con,$query);
            $count = mysqli_num_rows($result);
            if($count==1){
                ?>
                <script>
                    alert('Welcome admin');
                    window.location.href='admin_panel.html';
                </script>
                <?php
            }
            else{
                ?>
                <script>
                    alert('You are not allowed');
                    window.location.href='admin_login.php';
                </script>
                <?php
            }
        }
        ?>
</body>
</html>