<?php
    include "connect.php";
    

if(isset($_POST['search'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $c_pass = $_POST['c_pass'];

    $query="select * from login where username='$username' and password='$password' and c_pass='$c_pass'" ;
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);
    
    if($count>0){
        
        $data="SELECT * FROM book where email='$username'";
        $data_result = mysqli_query($con,$data);
        foreach($data_result as $display){
        
        ?>
        <table align="center" border=3px>
            
        <tr> <td>First Name </td> <td><?php echo $display['f_name']; ?> </td> </tr>
        <tr><td>Last Name </td> <td><?php echo $display['l_name'];?> </td> <br></tr>
        <tr><td>Email </td> <td><?php echo $display['email'];?> </td> </tr>
        <tr><td>Adult</td> <td><?php echo $display['people']; ?> </td> </tr>
        <tr><td>Children</td> <td><?php echo $display['children']; ?> </td> </tr>
        <tr><td>Date </td> <td><?php echo $display['d_date'];?> </td></tr>
        <tr><td>Mobile No. </td> <td><?php echo $display['m_num']; ?> </td> </tr>
        <tr><td>Town </td> <td><?php echo $display['town'];?> </td> </tr>
        <tr><td>Tour </td> <td><?php echo $display['tour'];?> </td> </tr>
        </table>
        <?php
        }
    }
    else
        {
            ?>
                <script>
                        alert("Not Available.");
                        window.location.href='https://aceholidays07.000webhostapp.com/home.html';
                </script>
            <?php

        }
    
    } 

    
?>