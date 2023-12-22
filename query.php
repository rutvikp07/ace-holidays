<?php
    include "connect.php";
    $f_mail = $_POST['f_mail'];
    $f_query = $_POST['f_query'];

$command = "INSERT INTO query(email, user_q) values('$f_mail', '$f_query')";
$stmt = $con->prepare($command);
$success = $stmt->execute();

if ($success) {
    ?>
            <script>
                alert("Query Noted down.");
                window.location.href='https://aceholidays07.000webhostapp.com/home.html';
            </script>
    <?php
} else {
    ?>
            <script>
                alert("Query Not Inserted");
                window.location.href='https://aceholidays07.000webhostapp.com/home.html';
            </script>
    <?php
}      
?>