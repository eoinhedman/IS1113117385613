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
    
	calcTotal(argSubTotal);
    display(argSubTotal);
    vat1(argSubTotal);
    dis1(argSubTotal);
}
function dis1(dis2){

var	dis3 = (dis2 * 0.05);
	
	document.getElementById("dis").value = dis3;
}


function vat1(vat2){
	
	var vat4;
	
	
	vat4 = (vat2 * 0.05)

var	vat3 = ((vat2 - vat4 )* 0.10);
	
	
	document.getElementById("vat").value = vat3;
	
}

function calcTotal(parmtotal){

var	disTotal = (parmtotal * 0.05)
	
var	vatTotal = ((parmtotal - disTotal)* 0.10);
	
var	totalAmount = (vatTotal  + parmtotal - disTotal )

	 document.getElementById("total").value = totalAmount;
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