/*global$*/

function validateDetails(){
    
    var pin; var customername; var emailaddress;
    
    pin= document.getElementById("user_pin").value;
    
    customername= document.getElementById("name").value;
    
    emailaddress= document.getElementById("email").value;
    
    //pin number validator
    if(pin == " "){
        alert("please enter your PIN")
    }
    else if(String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
        
    }
    else{
        enablebtnPurchase();
    }
    
    
    //name validator
    if(customername == " "){
        alert("please enter your name")
    }
    else if(String(customername).length < 3){
        alert("Please make sure your enter your name:");
        
    }
    else{
        enablebtnPurchase();
    }
    
    
    //email address validator
    if(emailaddress == " "){
        alert("please enter your email address")
    }
    else if(String(emailaddress).length < 7){
        alert("Please make sure your email is accurate");
        
    }
    else{
        enablebtnPurchase();
    }

//end of the validator function    
}

function enablebtnPurchase(){
    $("#btnPurchase").prop("disabled", false)
    
}
function disablebtnPurchase(){
    $("#btnPurchase").prop("disabled", true)
}