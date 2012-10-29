// prices
var encodeRateIn = 0.00175;
var encodeRateOut = 0.00225;

// input variables from the form
var inputFileSizeInMB = lookupID('inputFileSize');
var inputFileRunningTime = (lookupID('inputFileRunningTime') * 60);
var inputFilesPerDay = lookupID('inputFilesPerDay');

// functions

function lookupID(name){
return document.getElementById(name).value;
}

function update_totals(){
    inputFileSizeInMB = lookupID('inputFileSize');
    inputFileRunningTime = (lookupID('inputFileRunningTime') * 60);
    inputFilesPerDay = lookupID('inputFilesPerDay');
    mobileOutputRateKbps = lookupID('mobileOutputRateKbps');
    webOutputRateKbps = lookupID('webOutputRateKbps');
    iphoneOutputRateKbps = lookupID('iphoneOutputRateKbps');
    iptvOutputRateKbps = lookupID('iptvOutputRateKbps');
    hdOutputRateKbps = lookupID('hdOutputRateKbps');

    if (isNaN(inputFileSizeInMB)) {
        document.getElementById('error').innerHTML = "<p>Please enter a valid number for Average input file size.</p>";
    }
    else if (isNaN(inputFileRunningTime)) {
        document.getElementById('error').innerHTML = "<p>Please enter a valid number for Average input file running time. Decimals are okay but not fractions.</p>";
    }
    else if (isNaN(inputFilesPerDay)){
        document.getElementById('error').innerHTML = "<p>Please enter a valid number for Daily files in.</p>";
    }
    else {
        document.getElementById('error').innerHTML = "";
    }

    if(inputFileSizeInMB && inputFileRunningTime && inputFilesPerDay) {
        fcCalculate();
    }
}

function calcOutputFileSizeInMB (runningTimeInSeconds, dataRateInKbps){
    fileInMB = ((((runningTimeInSeconds * dataRateInKbps)/1024/8) * inputFilesPerDay) * 30);
    return fileInMB;
}

function fcCalculate() {
    // output filesizes in MB
    if (document.calculator.mobile_check.checked == true){
        mobileOutputSize = calcOutputFileSizeInMB(inputFileRunningTime, mobileOutputRateKbps);
    }
    else { 
        mobileOutputSize = 0;
    }
    if (document.calculator.web_check.checked == true){
        webOutputSize = calcOutputFileSizeInMB(inputFileRunningTime, webOutputRateKbps);
    }
    else { 
        webOutputSize = 0;
    }
    if (document.calculator.iphone_check.checked == true){
        iphoneOutputSize = calcOutputFileSizeInMB(inputFileRunningTime, iphoneOutputRateKbps);
    }
    else { 
        iphoneOutputSize = 0;
    }   
    if (document.calculator.iptv_check.checked == true){
        iptvOutputSize = calcOutputFileSizeInMB(inputFileRunningTime, hdOutputRateKbps);
    }
    else { 
        iptvOutputSize = 0;
    }
        if (document.calculator.hd_check.checked == true){
        hdOutputSize = calcOutputFileSizeInMB(inputFileRunningTime, hdOutputRateKbps);
    }
    else { 
        hdOutputSize = 0;
    }
    
    //totals
    var totalDataInMonthlyInMB = (inputFilesPerDay * inputFileSizeInMB) * 30;
    var totalOutputDataInMB = (mobileOutputSize + webOutputSize + iphoneOutputSize + iptvOutputSize + hdOutputSize);

    // costs
    var rawInputCost = (totalDataInMonthlyInMB * encodeRateIn);
    var rawOutputCost = (totalOutputDataInMB * encodeRateOut);
    
    // tally it up & display
	totalMoney = formatMoney(rawInputCost + rawOutputCost);
	if (totalOutputDataInMB <= 0){
	    document.getElementById('totalMonthly').value = "$0.00";
    } else {
    	document.getElementById('totalMonthly').value = totalMoney;
	}
	document.getElementById('monthlyDataIn').value = totalDataInMonthlyInMB.toFixed(2);
	document.getElementById('monthlyDataOut').value = totalOutputDataInMB.toFixed(2);
}

function formatMoney(number) {
	if (isNaN(number)) {
		return "$0.00";
	} else {
		// adapted from http://www.sonofsofaman.com/hobbies/code/js/formatcurrency.asp
		number = Math.floor(number*100+0.50000000001);
		intCents = number%100;
		strCents = intCents.toString();
		dblValue = Math.floor(number/100).toString();
		if(intCents<10)
			strCents = "0" + strCents;
		for (var i = 0; i < Math.floor((dblValue.length-(1+i))/3); i++)
			dblValue = dblValue.substring(0,dblValue.length-(4*i+3))+','+
			dblValue.substring(dblValue.length-(4*i+3));
		return '$' + dblValue + '.' + strCents;
	}
}
