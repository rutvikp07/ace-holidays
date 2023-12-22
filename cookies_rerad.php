<?php
    if(isset($_COOKIE)){
        echo $_COOKIE["Rutvik"];  
    } else{
        echo "No cookies to display..!!!\n";    //output the contents of the cookie array variable 
    }
?>
<html>
    <body>
        <p>This web page is displaying the previously stored cookie, using the $_COOKIE superglobal variable.</p>
    </body>
</html>