<?php
    $time = 
    setcookie("Rutvik", "Indus", time()+60); // expires after 60 seconds
?>
<html>
<body>
    <h3>Cookies Demo</h3>
    <p>Welcome user. This webpage is using cookies. The cookie will expire after 60 seconds.
    <a href="cookies_rerad.php">Cookie Read</a>
    </p>
</body>
</html>