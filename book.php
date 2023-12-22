<?php
    include "connect.php";

if(isset($_POST['book'])){
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $people = $_POST['people'];
    $children = $_POST['children'];
    $d_date = $_POST['d_date'];
    $m_num = $_POST['m_num'];
    $town = $_POST['town'];
    $tour = $_POST['tour'];
    $command = "INSERT INTO book(f_name, l_name, email, people, children, d_date, m_num, town, tour) 
        VALUES('$f_name', '$l_name', '$email', '$people','$children', '$d_date', '$m_num', '$town', '$tour')";
    $stmt = $con->prepare($command);
    $success = $stmt->execute();


if($success) {
    ?>
        <script>
            alert("Thank you for Booking.");
            window.location.href='https://aceholidays07.000webhostapp.com/home.html';
        </script>
    <?php
} else {
    ?>
        <script>
            alert("Enter fields properly");
            window.location.href='https://aceholidays07.000webhostapp.com/book.html';
        </script>
    <?php
}  
}    
?>