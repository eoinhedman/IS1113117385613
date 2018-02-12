<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        <h4>Please enter your payment details</h4>
        
        <form action = "eBus3.php" method="Post">
            
            <label for = "user_pin" method="Post">PIN</label>
            <input type="password" id= "user_pin" placeholder="Card Pin" maxlength="4"
            
            <button type="Submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            
        </form>
        
        <br/>
        <button onClick="validateDetails()">Validate</button>
        
        <script type="text/javascritp" src="eBus2_validator.js"></script>
    </body>
</html>

    
