/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked){
        argSubTotal = 100;
    }
    else if (document.getElementById('aws').checked) {
        argSubTotal = 300;
    }
	else if (document.getElementById('cloud').checked) {
        argSubTotal = 200;
    }
	else {
        argSubTotal = 400;
    }
    
	Total(argSubTotal);
    display(argSubTotal);
    vat1(argSubTotal);
    discount1(argSubTotal);
}
function discount1(disP){

var	disP2 = (disP * 0.05);
	
	document.getElementById("dis").value = disP2;
}


function vat1(vatP){
	
	
	
	
var	vatP2 = (vatP * 0.05)

var	vatP3 = ((vatP - vatP2 )* 0.10);
	
	
	document.getElementById("vat").value = vatP3;
	
}

function Total(totalp){ 

var	discountP = (totalp * 0.05)
	
var	vatTotal = ((totalp - discountP)* 0.10);
	
var	totalA = (vatTotal  - discountP + totalp)

	 document.getElementById("total").value = totalA;
}


function display(parm1){
    
	
    document.getElementById("subtotal").value = parm1;
   
    
    enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnproceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('btnproceed').prop('disabled', true);
}