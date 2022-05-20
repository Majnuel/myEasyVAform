<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<link rel="icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/favicon.png">

<title>My Easy VA</title>

<!-- UNCOMMENT TO ENABLE ORIGINAL CSS -->
<!-- <link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link href="/css/dashboard.css" rel="stylesheet"> -->

<!-- COMMENT TO AVOID OVERRIDING ORIGINAL CSS -->
<!-- CSS RESET: -->
<link href="/css/css-reset.css" rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<div class="container-fluid">
	<div class="row" style="padding-bottom: 30px;">
	</div>
</div>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">My Easy VA - [ VA Form Filling Application ]</a>
		</div>
		<h1>VA FORM REFACTOR AND RESTYLE</h1>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://www.benefits.va.gov/benefits/factsheets/burials/burial.pdf" target="_blank">VA Benefits Fact Sheet</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="col-xs-12">
			<div class="alert alert-success" role="alert">Lets get started with some basic information. After submitting, check your popup blocker if nothing happens or a file is not presented for download.</div>
			<div class="row">
				<div class="col-xs-4">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">First Name</span><input id="firstname" type="text" class="form-control" placeholder="First Name of Veteran" aria-describedby="sizing-addon1"><div class=input-group-btn><button type="button" class="btn btn-default" aria-label="Help" data-toggle="tooltip" data-placement="top" title="Legal Name, No Nicknames."><span class="glyphicon glyphicon-question-sign"></span></button></div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">Middle Name</span><input id="middlename" type="text" class="form-control" placeholder="Middle Name (or initial) of Veteran (optional)" aria-describedby="sizing-addon1"><div class=input-group-btn><button type="button" class="btn btn-default" aria-label="Help" data-toggle="tooltip" data-placement="top" title="Legal Middle Name if used when Enlisted, No Nicknames."><span class="glyphicon glyphicon-question-sign"></span></button></div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">Last Name</span><input id="lastname" type="text" class="form-control" placeholder="Last Name of Veteran" aria-describedby="sizing-addon1"><div class=input-group-btn><button type="button" class="btn btn-default" aria-label="Help" data-toggle="tooltip" data-placement="top" title="Legal Name, No Nicknames."><span class="glyphicon glyphicon-question-sign"></span></button></div>
					</div>
				</div>
			</div>

			<br>
			<div class="row">
				<div class="col-xs-12">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">Other Names</span><input id="othername" type="text" class="form-control" placeholder="Maiden Name or Other Name(s) Veteran Used While on Active Duty" aria-describedby="sizing-addon1"><div class=input-group-btn><button type="button" class="btn btn-default" aria-label="Help" data-toggle="tooltip" data-placement="top" title="Legal Name or Nickname."><span class="glyphicon glyphicon-question-sign"></span></button></div>
					</div>
				</div>
			</div>

			<br>
			<div class="row">
				<div class="col-xs-6">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">VA File Number</span><input id="vafilenumber" type="text" class="form-control" placeholder="V. A. File Number" aria-describedby="sizing-addon1"><div class=input-group-btn><button type="button" class="btn btn-default" aria-label="Help" data-toggle="tooltip" data-placement="top" title="The U.S. Department of Veterans Affairs uses file numbers to identify veterans receiving VA benefits. Your VA file number is typically the same as your social security number, though in some cases it is different."><span class="glyphicon glyphicon-question-sign"></span></button></div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">Military Service Number</span><input id="militaryservicenumber" type="text" class="form-control" placeholder="Military Service Number/Serial Number" aria-describedby="sizing-addon1"><div class=input-group-btn><button type="button" class="btn btn-default" aria-label="Help" data-toggle="tooltip" data-placement="top" title="The same as your social security number unless you joined prior to July 1, 1969-Army and Air Force, January 1, 1972-Navy and Marines, October 1, 1974 Coast Guard.  In these cases your Military Service Number/Serial Number is different than your social security number."><span class="glyphicon glyphicon-question-sign"></span></button></div>
					</div>
				</div>
			</div>

			<br>
			<div class="row">
				<div class="col-xs-6">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">Date of Active Duty</span><input id="dateactiveduty" type="text" class="form-control" placeholder="Date Entered Active Duty (05-29-1943)" aria-describedby="sizing-addon1">
					</div>
				</div>
				<div class="col-xs-6">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">Date End of Active Duty</span><input id="dateendactiveduty" type="text" class="form-control" placeholder="Date Released from Active Duty (05-29-1998)" aria-describedby="sizing-addon1">
					</div>
				</div>
			</div>

			<br>
			<div class="row">
				<div class="col-xs-4">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">Month of Birth (#)</span><input id="dateofbirth-month" type="text" class="form-control" placeholder="Month of Birth (Ex: 03)" aria-describedby="sizing-addon1">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">Day of Birth (#)</span><input id="dateofbirth-day" type="text" class="form-control" placeholder="Day of Birth (Ex: 12)" aria-describedby="sizing-addon1">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">Year of Birth (#)</span><input id="dateofbirth-year" type="text" class="form-control" placeholder="Year of Birth (Ex: 1947)" aria-describedby="sizing-addon1">
					</div>
				</div>
			</div>

			<br>
			<div class="row">
				<div class="col-xs-4">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">Month of Death (#)</span><input id="dateofdeath-month" type="text" class="form-control" placeholder="Month of Death (Ex: 06)" aria-describedby="sizing-addon1">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">Day of Death (#)</span><input id="dateofdeath-day" type="text" class="form-control" placeholder="Day of Death (Ex: 14)" aria-describedby="sizing-addon1">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">Year of Death (#)</span><input id="dateofdeath-year" type="text" class="form-control" placeholder="Year of Death (Ex: 2016)" aria-describedby="sizing-addon1">
					</div>
				</div>
			</div>

			<br>
			<div class="row">
				<div class="col-xs-4">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">Date of Burial</span><input id="dateburial" type="text" class="form-control" placeholder="Date of Burial (05-29-1983)" aria-describedby="sizing-addon1">
					</div>
				</div>
				<div class="col-xs-8">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">Place of Burial</span><input id="placeburial" type="text" class="form-control" placeholder="Place of Burial (Name, City, State)" aria-describedby="sizing-addon1">
					</div>
				</div>
			</div>

			<br>
			<div class="row">
				<div class="col-xs-3">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1"><input type="checkbox" id="branch-army" value="0" aria-label="Army"></span><input type="text" class="form-control" placeholder="Army" aria-describedby="sizing-addon1" disabled>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1"><input type="checkbox" id="branch-navy" value="0" aria-label="Navy"></span><input type="text" class="form-control" placeholder="Navy" aria-describedby="sizing-addon1" disabled>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1"><input type="checkbox" id="branch-airforce" value="0" aria-label="Air Force"></span><input type="text" class="form-control" placeholder="Air Force" aria-describedby="sizing-addon1" disabled>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1"><input type="checkbox" id="branch-marinecorps" value="0" aria-label="Marine Corps"></span><input type="text" class="form-control" placeholder="Marine Corps" aria-describedby="sizing-addon1" disabled>
					</div>
				</div>
			</div>

			<br>
			<div class="row">
				<div class="col-xs-3">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1"><input type="checkbox" id="branch-coastguard" value="0" aria-label="Coast Guard"></span><input type="text" class="form-control" placeholder="Coast Guard" aria-describedby="sizing-addon1" disabled>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1"><input type="checkbox" id="branch-selectedservice" value="0" aria-label="Selected Service"></span><input type="text" class="form-control" placeholder="Selected Service" aria-describedby="sizing-addon1" disabled>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1"><input type="checkbox" id="branch-armyair" value="0" aria-label="Army Air Forces"></span><input type="text" class="form-control" placeholder="Army Air Forces" aria-describedby="sizing-addon1" disabled>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1"><input type="checkbox" id="branch-merchantmarine" value="0" aria-label="Merchant Marine"></span><input type="text" class="form-control" placeholder="Merchant Marine" aria-describedby="sizing-addon1" disabled>
					</div>
				</div>
			</div>

			<br>
			<div class="row">
				<div class="col-xs-12">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1"><input type="checkbox" id="branch-other" value="0" aria-label="Other"></span><input id="branch-other-specify" type="text" class="form-control" placeholder="Other Branch of Service (Specify)" aria-describedby="sizing-addon1">
					</div>
				</div>
			</div>

			<br>
			<div class="col-xs-6" style="padding-bottom: 20px;">
				<div class="btn-group" style="padding-right: 10px;"><button type="button" class="btn btn-success" onclick="postData1()"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Download Form 27-2008; Application For United States Flag For Burial Purposes</button></div>
			</div>
			<div class="col-xs-6" style="padding-bottom: 20px;">
				<div class="btn-group" style="padding-right: 10px;"><button type="button" class="btn btn-success" onclick="postData2()"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Download Form 40-1330; Claim For Standard Government Headstone or Marker</button></div>
			</div>

			<br>
			<div class="col-xs-6" style="padding-bottom: 20px;">
				<div class="btn-group" style="padding-right: 10px;"><button type="button" class="btn btn-success" onclick="postData3()"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Download Form 21P-530; Application For Burial Benefits</button></div>
			</div>
			<div class="col-xs-6" style="padding-bottom: 20px;">
				<div class="btn-group" style="padding-right: 10px;"><button type="button" class="btn btn-success" onclick="postData4()"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Download Form 40-0247; Presidental Memorial Certificate Request Form</button></div>
			</div>

			<br>
			<div class="col-xs-6" style="padding-bottom: 20px;">
				<div class="btn-group" style="padding-right: 10px;"><button type="button" class="btn btn-success" onclick="postData5()"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Download Form 40-1330M; Claim For Government Medallion For Placement In A Private Cemetery</button></div>
			</div>
			<div class="col-xs-6" style="padding-bottom: 20px;">
				<div class="btn-group" style="padding-right: 10px;"><button type="button" class="btn btn-success" onclick="postData6()"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Download Form SF-180; Request Pertaining To Military Records</button></div>
			</div>

			<br>
			<div class="col-xs-6" style="padding-bottom: 20px;">
				<div class="btn-group" style="padding-right: 10px;"><button type="button" class="btn btn-success" onclick="postData7()"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Download Form 29-4125; Claim For One Sum Payment (Government Life Insurance)</button></div>
			</div>
			<div class="col-xs-6" style="padding-bottom: 20px;">

			</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery.min.js"><\/script>')</script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/vendor/holder.min.js"></script>
<script src="/js/ie10-viewport-bug-workaround.js"></script>

<script>
function randomString(length, chars) {
	var result = '';
	for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
	return result;
}

function postData1() {
	var uniqueKey = randomString(12, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

	if (document.getElementById('branch-army').checked) {
		var brancharmy = "1";
	}
	if (document.getElementById('branch-navy').checked) {
		var branchnavy = "1";
	}
	if (document.getElementById('branch-airforce').checked) {
		var branchairforce = "1";
	}
	if (document.getElementById('branch-marinecorps').checked) {
		var branchmarinecorps = "1";
	}
	if (document.getElementById('branch-coastguard').checked) {
		var branchcoastguard = "1";
	}
	if (document.getElementById('branch-selectedservice').checked) {
		var branchselectedservice = "1";
	}
	if (document.getElementById('branch-armyair').checked) {
		var branchother = "1";
	}
	if (document.getElementById('branch-merchantmarine').checked) {
		var branchother = "1";
	}
	if (document.getElementById('branch-other').checked) {
		var branchother = "1";
	}

	var values = {
		<?php
		echo "'" . strToHex('F[0].Page_1[0].namefml[0]') . "': document.getElementById('firstname').value + ' ' + document.getElementById('middlename').value + ' ' + document.getElementById('lastname').value,";
		echo "'" . strToHex('F[0].Page_1[0].othernameused[0]') . "': document.getElementById('othername').value,";
		echo "'" . strToHex('F[0].Page_1[0].vafilenumber[0]') . "': document.getElementById('vafilenumber').value,";
		echo "'" . strToHex('F[0].Page_1[0].militaryservicenumber[0]') . "': document.getElementById('militaryservicenumber').value,";
		echo "'" . strToHex('F[0].Page_1[0].army[0]') . "': brancharmy,";
		echo "'" . strToHex('F[0].Page_1[0].navy[0]') . "': branchnavy,";
		echo "'" . strToHex('F[0].Page_1[0].airforce[0]') . "': branchairforce,";
		echo "'" . strToHex('F[0].Page_1[0].marinecorps[0]') . "': branchmarinecorps,";
		echo "'" . strToHex('F[0].Page_1[0].coastguard[0]') . "': branchcoastguard,";
		echo "'" . strToHex('F[0].Page_1[0].selectedservice[0]') . "': branchselectedservice,";
		echo "'" . strToHex('F[0].Page_1[0].other[0]') . "': branchother,";
		echo "'" . strToHex('F[0].Page_1[0].Specother[0]') . "': document.getElementById('branch-other-specify').value,";
		echo "'" . strToHex('F[0].Page_1[0].Dateenteractiveduty[0]') . "': document.getElementById('dateactiveduty').value,";
		echo "'" . strToHex('F[0].Page_1[0].Datereleasedfromactiveduty[0]') . "': document.getElementById('dateendactiveduty').value,";
		echo "'" . strToHex('F[0].Page_1[0].DOBi[0]') . "': document.getElementById('dateofbirth-month').value + '/' + document.getElementById('dateofbirth-day').value + '/' + document.getElementById('dateofbirth-year').value,";
		echo "'" . strToHex('F[0].Page_1[0].DateOD[0]') . "': document.getElementById('dateofdeath-month').value + '/' + document.getElementById('dateofdeath-day').value + '/' + document.getElementById('dateofdeath-year').value,";
		echo "'" . strToHex('F[0].Page_1[0].DOB[0]') . "': document.getElementById('dateburial').value,";
		echo "'" . strToHex('F[0].Page_1[0].Placeofburial[0]') . "': document.getElementById('placeburial').value,";
		?>
	};

	$.ajax({
		url: "generatePDF.php?uniqueKey=" + uniqueKey + "&pdfID=1",
		type: "POST",
		data: values,
		success: function(){
                        window.open('https://www.myeasyva.com/download.php?uniqueKey=' + uniqueKey + '&pdfID=1', '_blank');
		}
	});
}

function postData2() {
	var uniqueKey = randomString(12, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

	if (document.getElementById('branch-army').checked) {
		var brancharmy = "1";
	}
	if (document.getElementById('branch-navy').checked) {
		var branchnavy = "1";
	}
	if (document.getElementById('branch-airforce').checked) {
		var branchairforce = "1";
	}
	if (document.getElementById('branch-marinecorps').checked) {
		var branchmarinecorps = "1";
	}
	if (document.getElementById('branch-coastguard').checked) {
		var branchcoastguard = "1";
	}
	if (document.getElementById('branch-selectedservice').checked) {
		var branchselectedservice = "1";
	}
	if (document.getElementById('branch-armyair').checked) {
		var brancharmyair = "1";
	}
	if (document.getElementById('branch-merchantmarine').checked) {
		var branchmerchantmarine = "1";
	}
	if (document.getElementById('branch-other').checked) {
		var branchother = "1";
	}

	var values = {
		<?php
		echo "'" . strToHex('form1[0].#subform[2].TextField1[0]') . "': document.getElementById('firstname').value,";
		echo "'" . strToHex('form1[0].#subform[2].TextField2[0]') . "': document.getElementById('middlename').value,";
		echo "'" . strToHex('form1[0].#subform[2].TextField3[0]') . "': document.getElementById('lastname').value,";
		echo "'" . strToHex('form1[0].#subform[2].TextField5[1]') . "': document.getElementById('militaryservicenumber').value,";
		echo "'" . strToHex('form1[0].#subform[2].TextField6[0]') . "': document.getElementById('dateofbirth-month').value,";
		echo "'" . strToHex('form1[0].#subform[2].TextField7[0]') . "': document.getElementById('dateofbirth-day').value,";
		echo "'" . strToHex('form1[0].#subform[2].TextField8[0]') . "': document.getElementById('dateofbirth-year').value,";
		echo "'" . strToHex('form1[0].#subform[2].TextField9[0]') . "': document.getElementById('dateofdeath-month').value,";
		echo "'" . strToHex('form1[0].#subform[2].TextField10[0]') . "': document.getElementById('dateofdeath-day').value,";
		echo "'" . strToHex('form1[0].#subform[2].TextField8[1]') . "': document.getElementById('dateofdeath-year').value,";
		echo "'" . strToHex('form1[0].#subform[2].CheckBox6[0]') . "': brancharmy,";
		echo "'" . strToHex('form1[0].#subform[2].CheckBox7[0]') . "': branchnavy,";
		echo "'" . strToHex('form1[0].#subform[2].CheckBox8[0]') . "': branchmarinecorps,";
		echo "'" . strToHex('form1[0].#subform[2].CheckBox9[0]') . "': branchcoastguard,";
		echo "'" . strToHex('form1[0].#subform[2].CheckBox10[0]') . "': branchairforce,";
		echo "'" . strToHex('form1[0].#subform[2].CheckBox11[0]') . "': brancharmyair,";
		echo "'" . strToHex('form1[0].#subform[2].CheckBox12[0]') . "': branchmerchantmarine,";
		echo "'" . strToHex('form1[0].#subform[2].CheckBox13[0]') . "': branchother,";
		echo "'" . strToHex('form1[0].#subform[2].TextField25[0]') . "': document.getElementById('branch-other-specify').value,";
		?>
	};

	$.ajax({
		url: "generatePDF.php?uniqueKey=" + uniqueKey + "&pdfID=2",
		type: "POST",
		data: values,
		success: function(){
                        window.open('https://www.myeasyva.com/download.php?uniqueKey=' + uniqueKey + '&pdfID=2', '_blank');
		}
	});
}

function postData3() {
	var uniqueKey = randomString(12, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

	var values = {
		<?php
		echo "'" . strToHex('form1[0].#subform[36].VeteransFirstName[0]') . "': document.getElementById('firstname').value,";
		echo "'" . strToHex('form1[0].#subform[36].VeteransMiddleInitial1[0]') . "': document.getElementById('middlename').value.charAt(0),";
		echo "'" . strToHex('form1[0].#subform[36].VeteransLastName[0]') . "': document.getElementById('lastname').value,";
		echo "'" . strToHex('form1[0].#subform[36].VAFileNumber[0]') . "': document.getElementById('vafilenumber').value,";
		echo "'" . strToHex('form1[0].#subform[36].DATE_OF_BIRTH[0]') . "' : document.getElementById('dateofbirth-month').value + '/' + document.getElementById('dateofbirth-day').value + '/' + document.getElementById('dateofbirth-year').value,";
		echo "'" . strToHex('form1[0].#subform[36].DATE_OF_DEATH[0]') . "' : document.getElementById('dateofdeath-month').value + '/' + document.getElementById('dateofdeath-day').value + '/' + document.getElementById('dateofdeath-year').value,";
		echo "'" . strToHex('form1[0].#subform[36].DATE_ENTERED_SERVICE[0]') . "': document.getElementById('dateactiveduty').value,";
		echo "'" . strToHex('form1[0].#subform[36].DATE_SEPARATED_SERVICE[2]') . "': document.getElementById('dateendactiveduty').value,";
		echo "'" . strToHex('form1[0].#subform[37].PLACE_OF_DEATH[1]') . "': document.getElementById('placeburial').value,";
		?>
	};

	$.ajax({
		url: "generatePDF.php?uniqueKey=" + uniqueKey + "&pdfID=3",
		type: "POST",
		data: values,
		success: function(){
                        window.open('https://www.myeasyva.com/download.php?uniqueKey=' + uniqueKey + '&pdfID=3', '_blank');
		}
	});
}

function postData4() {
	var uniqueKey = randomString(12, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

	var values = {
		<?php
		echo "'" . strToHex('form1[0].#subform[0].TextField1[0]') . "': document.getElementById('firstname').value + ' ' + document.getElementById('middlename').value + ' ' + document.getElementById('lastname').value,";
		?>
	};

	$.ajax({
		url: "generatePDF.php?uniqueKey=" + uniqueKey + "&pdfID=4",
		type: "POST",
		data: values,
		success: function(){
                        window.open('https://www.myeasyva.com/download.php?uniqueKey=' + uniqueKey + '&pdfID=4', '_blank');
		}
	});
}

function postData5() {
	var uniqueKey = randomString(12, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

	if (document.getElementById('branch-army').checked) {
		var brancharmy = "1";
	}
	if (document.getElementById('branch-navy').checked) {
		var branchnavy = "1";
	}
	if (document.getElementById('branch-airforce').checked) {
		var branchairforce = "1";
	}
	if (document.getElementById('branch-marinecorps').checked) {
		var branchmarinecorps = "1";
	}
	if (document.getElementById('branch-coastguard').checked) {
		var branchcoastguard = "1";
	}
	if (document.getElementById('branch-selectedservice').checked) {
		var branchselectedservice = "1";
	}
	if (document.getElementById('branch-armyair').checked) {
		var brancharmyair = "1";
	}
	if (document.getElementById('branch-merchantmarine').checked) {
		var branchmerchantmarine = "1";
	}
	if (document.getElementById('branch-other').checked) {
		var branchother = "1";
	}

	var values = {
		<?php
		echo "'" . strToHex('form1[0].#subform[1].TextField1[0]') . "': document.getElementById('firstname').value,";
		echo "'" . strToHex('form1[0].#subform[1].TextField2[0]') . "': document.getElementById('middlename').value,";
		echo "'" . strToHex('form1[0].#subform[1].TextField3[0]') . "': document.getElementById('lastname').value,";
		echo "'" . strToHex('form1[0].#subform[1].TextField5[1]') . "': document.getElementById('militaryservicenumber').value,";
		echo "'" . strToHex('form1[0].#subform[1].TextField6[0]') . "': document.getElementById('dateofbirth-month').value,";
		echo "'" . strToHex('form1[0].#subform[1].TextField7[0]') . "': document.getElementById('dateofbirth-day').value,";
		echo "'" . strToHex('form1[0].#subform[1].TextField8[0]') . "': document.getElementById('dateofbirth-year').value,";
		echo "'" . strToHex('form1[0].#subform[1].TextField9[0]') . "': document.getElementById('dateofdeath-month').value,";
		echo "'" . strToHex('form1[0].#subform[1].TextField10[0]') . "': document.getElementById('dateofdeath-day').value,";
		echo "'" . strToHex('form1[0].#subform[1].TextField8[1]') . "': document.getElementById('dateofdeath-year').value,";
		echo "'" . strToHex('form1[0].#subform[1].CheckBox21[0]') . "': brancharmy,";
		echo "'" . strToHex('form1[0].#subform[1].CheckBox22[0]') . "': branchnavy,";
		echo "'" . strToHex('form1[0].#subform[1].CheckBox23[0]') . "': branchmarinecorps,";
		echo "'" . strToHex('form1[0].#subform[1].CheckBox24[0]') . "': branchcoastguard,";
		echo "'" . strToHex('form1[0].#subform[1].CheckBox25[0]') . "': branchairforce,";
		echo "'" . strToHex('form1[0].#subform[1].CheckBox26[0]') . "': brancharmyair,";
		echo "'" . strToHex('form1[0].#subform[1].CheckBox27[0]') . "': branchmerchantmarine,";
		echo "'" . strToHex('form1[0].#subform[1].CheckBox28[0]') . "': branchother,";
		echo "'" . strToHex('form1[0].#subform[1].TextField1[1]') . "': document.getElementById('branch-other-specify').value,";
		?>
	};

	$.ajax({
		url: "generatePDF.php?uniqueKey=" + uniqueKey + "&pdfID=5",
		type: "POST",
		data: values,
		success: function(){
                        window.open('https://www.myeasyva.com/download.php?uniqueKey=' + uniqueKey + '&pdfID=5', '_blank');
		}
	});
}

function postData6() {
	var uniqueKey = randomString(12, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

	var values = {
		<?php
		echo "'" . strToHex('NAME USED DURING SERVICE last first full middle') . "': document.getElementById('firstname').value + ' ' + document.getElementById('middlename').value + ' ' + document.getElementById('lastname').value,";
		echo "'" . strToHex('DATE OF BIRTH') . "': document.getElementById('dateofbirth-month').value + '/' + document.getElementById('dateofbirth-day').value + '/' + document.getElementById('dateofbirth-year').value,";
		?>
	};

	$.ajax({
		url: "generatePDF.php?uniqueKey=" + uniqueKey + "&pdfID=6",
		type: "POST",
		data: values,
		success: function(){
                        window.open('https://www.myeasyva.com/download.php?uniqueKey=' + uniqueKey + '&pdfID=6', '_blank');
		}
	});
}

function postData7() {
	var uniqueKey = randomString(12, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

	var values = {
		<?php
		echo "'" . strToHex('s_294125503[0].#subform[0].firstmiddlelastname[0]') . "': document.getElementById('firstname').value + ' ' + document.getElementById('middlename').value + ' ' + document.getElementById('lastname').value,";
		echo "'" . strToHex('s_294125503[0].#subform[0].Dateofbirth[0]') . "' : document.getElementById('dateofdeath-month').value + '/' + document.getElementById('dateofdeath-day').value + '/' + document.getElementById('dateofdeath-year').value,";
		?>
	};

	$.ajax({
		url: "generatePDF.php?uniqueKey=" + uniqueKey + "&pdfID=7",
		type: "POST",
		data: values,
		success: function(){
			window.open('https://www.myeasyva.com/download.php?uniqueKey=' + uniqueKey + '&pdfID=7', '_blank');
		}
	});
}
</script>
</body>
</html>

<?php
function strToHex($string){
	$hex = '';
	for ($i=0; $i<strlen($string); $i++){
		$ord = ord($string[$i]);
		$hexCode = dechex($ord);
		$hex .= substr('0'.$hexCode, -2);
	}
	return strToUpper($hex);
}
?>
