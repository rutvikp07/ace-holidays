<html>
<link rel="stylesheet" href="main.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <body>
    <center class="des">PACKAGES</center>
    
    <?php
       
        

     include "connect.php";
                $display = "SELECT * FROM packages ";
                $q_dis=mysqli_query($con,$display);
                
    
                if(mysqli_num_rows($q_dis) > 0){
                    foreach($q_dis as $result){
                    ?>
                    
                    <div class="box-container">
                        <div class="box">
                            <div class="boximg">
                            <img src="<?php echo $result['image']; ?>" height="200px" width="200px">
                            </div>
                        <div class="content">
                        <span><?php echo $result['des_name'];?></span>
                        <br> 
                        <?php echo $result['description'];?>
                        <br>
                        Price:
                        <?php echo $result['price'];?><br>
                        
                        Days:
                        <?php echo $result['days'];?><br> 
                        
                        Nights:
                        <?php echo $result['nights'];?><br> <br>
                        
                        <a href="book.html" class="pack_btn">Book</a>
                            </div>
                        </div>
                    </div>
                    <style>
                        .box-container{
                            display: inline-block; 
                            margin-left: 50px;
                            margin-top: 20px;
                        }
                        .box-container a{
                            color: rgb(0, 0, 0);
                            background-color: rgb(247, 200, 98);
                            margin: 10px;
                            padding: 5px;
                            text-decoration: none;
                            border-radius: 3px;
                        }
                    </style>
                    <?php
                        
                    ?>
                    <?php
                    }
                }
                ?>
                    </body>
                    
</html>