<?php
        
        include "connect.php";
        
        
        if(isset($_POST['submit'])){
            $des_name=$_POST['p_name'];
            $des=$_POST['des'];
            $price=$_POST['price'];
            $days=$_POST['days'];
            $nights=$_POST['nights'];
            $photo_name=$_FILES['photo']['name'];
            $photo_temp = $_FILES['photo']['tmp_name'];
            $photo_size = $_FILES['photo']['size'];
            $photo_type = $_FILES['photo']['type'];

            $fileext = explode('.',$photo_name);
            $filecheck = strtolower(end($fileext));
            $fileextstored = array('png','jpg','jpeg');

            $check ="select * from packages where des_name='$des_name'" ;
            $check_result = mysqli_query($con,$check);
            $total_row = mysqli_num_rows($check_result);
            if($total_row>0){
                ?>
            <script>
                alert('Already added!')
                window.location.href='admin_panel.html';
            </script>
            <?php
            }
            else{

            if(in_array($filecheck,$fileextstored)){
                $folder = "D:\uploaded-files";
                $path = $folder . $photo_name;              
                move_uploaded_file($photo_temp,$path);
                $insert = "INSERT INTO packages(des_name,description,price,days,nights,image) VALUES ('$des_name','$des','$price','$days','$nights','$path')";
                $query = mysqli_query($con,$insert);
    
               

                $display = "SELECT * FROM packages ";
                $q_dis=mysqli_query($con,$display);
                // $row = mysqli_num_rows($q_dis);
    
                while($result = mysqli_fetch_array($q_dis)){
    
                    ?>
                    <div class="tables">
                    <table border=2px>
                    <tr>
                        <th colspan="2"><img src="<?php echo $result['image']; ?>" height="200px" width="200px"> </th><br>
                        <tr><td>Id</td><td><?php echo $result['id'];?></td> </tr><br>
                        <tr><td>Destination</td><td><?php echo $result['des_name'];?></td> </tr><br>
                        <th colspan="2">Description</th>
                        <tr> <td colspan="2"><?php echo $result['description'];?></td></tr>
                        <tr> <td colspan="2"><?php echo $result['days'];?></td></tr>
                        <tr> <td colspan="2"><?php echo $result['nights'];?></td></tr> 
                        <tr><td>Price</td><td><?php echo $result['price'];?></td> </tr><br>
                        
                        
                    </tr>
                    </table>
                    <a href="package_delete.php"><input type="submit" class="btn" name="delete" value="delete"></a>
                    </div>
                    <style>
                        .tables{
                            display: inline-block;
                        }
                        .btn{
                            text-align:center;
                            background-color:orange;
                            color:black;
                        }
                    </style>
                    <?php
    
                }
                   
            }       

        }
    }
        ?>