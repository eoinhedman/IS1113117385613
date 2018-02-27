<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="eBus2_validator.js"></script>
        
          <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css">
    </head>
    
         <div id="container">
            <div id="header">
                <h3>Enter your details</h3>
            </div>
    <body>
        <h4>Please enter your payment details</h4>
        
        
            <form action="ebus3.php" method="POST">

            <div>
                <ul>
                    <li><label for="Card Pin">Card Pin:</label></li>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    <br/>
                    <li><label for="Name">Name:</label></li>
                    <input type="text" id="name" name="customername" placeholder="Enter name" maxlength="15">
                    <br/>
                    <li><label for="email">E-mail:</label></li>
                    <input type="text" id="email" name="emailaddress" placeholder="Enter Email" maxlength="15">
                </ul>
            </div>

                <button type="submit" id="btnPurchase" class="btn btn-success"disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()" class="btn btn-primary">Validate</button>

            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
        
    </body>
</html>