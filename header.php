<?php /*  header.php  */
/**
 *
 */
# header


// Include the config file
require_once($_SERVER['DOCUMENT_ROOT'] . '/_inc/settings.config.php');


// Include the functions file
require_once( FUNCTIONS_PATH . 'functions.php');
//Load Google API PHP Client Library

require_once( METRICS_PATH . '/google-api-php-client/src/Google_Client.php');
require_once(METRICS_PATH . '/google-api-php-client/src/contrib/Google_AnalyticsService.php');
//require_once(METRICS_PATH . '/core-query.php');
//Start a session to persist credentials

session_start();

//Create and configure a new client object

?>
<!-- Begin HTML/CSS Header below.-->
<!DOCTYPE html>
<html>

<head>

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

 <meta charset="utf-8">
    <title>ConTra Reporting</title>
	<link rel="stylesheet" href="mainstyle.css" />
    <!--<link rel="stylesheet" href="print.css" media="print"/>-->

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script type="text/javascript">
    function checkSelect() {

        var checkOne, checkTwo, checkThree, checkFour, checkFive, checkSix, checkSeven, checkEight, checkNine;

        checkOne = document.getElementById("checkBox1").checked;
        checkTwo = document.getElementById("checkBox2").checked;
        checkThree = document.getElementById("checkBox3").checked;
        checkFour = document.getElementById("checkBox4").checked;
        checkFive = document.getElementById("checkBox5").checked;
        checkSix = document.getElementById("checkBox6").checked;
        checkSeven = document.getElementById("checkBox7").checked;
        checkEight = document.getElementById("checkBox8").checked;
	checkNine = document.getElementById("checkBox9").checked;



        if (checkOne == true && checkTwo == true && checkThree == true && checkFour == true && checkFive == true && checkSix == true && checkSeven == true && checkEight == true && checkNine == true) {
            alert("All sites and report types have been selected.");
        }//end if true
        else if (checkOne == false || checkTwo == false || checkThree == false || checkFour == false || checkFive == false) {
            alert("Check something.");
        }//end else

    }//end function

    function formReset() {
        document.getElementById("formBoxArea").reset();
    }//end function

	//function windowPrint() {
	//			    var divToPrint = document.getElementById('graphs');
	//		newWin= window.open();
	//		newWin.document.write(divToPrint.innerHTML);
	//		newWin.location.reload();
	//		newWin.focus();
	//		newWin.print();
	//		newWin.close();
	//}//end function


	//function generatePDF() {}


</script>

</head>

<body>
