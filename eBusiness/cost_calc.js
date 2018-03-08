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
    vat(argSubTotal);
    discount(argSubTotal);
}

    
function discount(disParm){
    
    var	disc = (disParm * 0.05);
    	
    document.getElementById("dis").value = disc;
}


function vat(vatParm){
    	
    var	vat1 = (vatParm * 0.05)
    
    var	vat2 = ((vatParm - vat1 )* 0.10);
	
	document.getElementById("vat").value = vat2;
}

function Total(totalParm){ 

    var	discountParm = (totalParm * 0.05)
    	
    var	vatTotal = ((totalParm - discountParm)* 0.10);
    	
    var	totalA = (vatTotal  - discountParm + totalParm)

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