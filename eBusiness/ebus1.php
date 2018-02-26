<!DOCTYPE html>
<html> 

    <head>
        <title>Select A Cloud Product!</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        body  {
            background-image: url("CV Pages/images/background-image.jpg");
            background-color: #cccccc;
            }
        
    </head>
    
        <div id="container">
          <div id="header">
                <h3>Cloud Server Products</h3>
            </div>
            
        <h4>Products</h4>
        
        <br/>
        <br/>
            
            <form method="post" name ="form1" action="ebus2.php"  >
            
			<h4>Cloud Products</h4>
            <label for ="salesforce">
            <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
            Salesforce @ $100
            </label>
            
            <br/>
            
			<label for ="cloud">
            <input type="radio" id="cloud" name="product" onClick="disablebtnProceed()"/>
            Cloud9 @ $200
            </label>    
            
            <br/>
			
			<label for ="aws">
            <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
            Amazon Web Service WS @ $300
            </label>  
			
			<br/>
			
			<label for ="gmail">
            <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
            Gmail @ $400
            </label>   
			
			<br/>
            <br/>
        
        
    <div>
        <ul>
            <li><label for="subtotal"> Sub Total </label></li>
            <input type="text" id="subtotal" value="0.00" readonly/>

            <li><label for="dis"> Discount </label></li>
            <input type="text" id="dis" value="0.00" readonly/>         

            <li><label for="vat">vat</label></li>
            <input type="text" id="vat"  value="0.00" readonly/>             

            <li><label for="total">Total</label></li>
            <input type="text" id="total" name="total" value="0.00" readonly/>
        </ul>
    </div>

            <button type="submit" id="btnproceed" disabled>add  to shopping cart</button>
		
            </form>
            <br/>
			 <button onclick="calcSub()">Calculate Cost</button>
        <a role="button" href="eBus1.php">ClearChoice</a>
        
    </body>
    </head>