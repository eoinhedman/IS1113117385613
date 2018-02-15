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
        ?>
    </body>
</html>