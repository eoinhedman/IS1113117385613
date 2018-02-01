<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>

        <h4>Select a Product</h4>
        
        <br/>
        
        <form method="POST" action="ebus2.php"></form>
        
        <label for="Salesforce">
            <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
            Salesforce @ $100
        </label>

        <br/>
       
       <label for="aws">
            <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
            AWS @ $300
        </label>
        
        <br/>
        <br/>
        
        <label for="Subtotal">
            Sub Total
            <input type="Text" id="subtotal" value="0.00" readonly/>
        </label>
        
        <br/>
        
        <label for="Total">
            Total
        <input type="Text" id="subtotal" value="0.00" readonly/>
        </label>
        
        <br/>
        
        <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="eBus1.php">ClearChoice</a>
        
    </body>
    </head>