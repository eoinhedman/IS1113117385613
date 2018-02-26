<?php
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Receipt</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
    </head>
    
            <div id="container">
            <div id="header">
                <h3>Thank you for your purchase!</h3>
            </div>
            
    <body>
        <h4>Receipt</h4>
                
        <?php
        // Echo session variables that were set on previous page.
        
            echo "The total is " . $_SESSION["total"] . ". <br/>";
            echo "Customerame " . $_POST["customername"] . ". <br/>";
            echo "The total is " . $_POST["emailaddress"] . ". <br/>";

        ?>
    </body>
</html>