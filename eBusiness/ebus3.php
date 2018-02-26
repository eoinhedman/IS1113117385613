<?php
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Receipt</title>
    </head>
    <body>
        <h4>Receipt</h4>
                
        <?php
        // Echo session variables that were set on previous page.
        echo "The total is " . $_SESSION["total"] . ".";
        echo "Customerame " . $_POST["customername"] . ".";
        echo "The total is " . $_POST["emailaddress"] . ".";
        ?>
    </body>
</html>