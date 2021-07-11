<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Blinders Express - Booking Form</title>
<link rel="icon" type="image/x-icon" href="assets/icon.jpg" />
<link rel="stylesheet" href="css/css4.css" />
<script src="js/jquery.min.js"> </script>
<script src="js/semantic.min.js"></script>
<link rel="stylesheet" href="css/datepicker.css"/>
<script src="js/datepicker.js"></script>
<script src="js/nav.js"></script>
<script src="js/order_validate.js"></script>
<script src="js/order_validate.js"></script>
</head>
<body>
    
    <?php

    echo "<div class=\"ui inverted huge borderless fixed fluid menu\">";
    echo "  <a class=\"header item\">Blinder Express Online Booking System</a>";
    echo "</div><br>";
	echo " 		<div class=\"ui fluid container center aligned\" style=\"cursor:pointer;margin-top:40px\">";
	echo "		<div class=\"ui unstackable tiny steps\">";
	echo "       <div class=\"step\" onclick=\"booking()\">";
    echo "		<div class=\"content\">";
    echo " 	<div class=\"title\">Booking Details</div>";
    echo "  <div class=\"description\">Travelling and booking info</div>";
    echo " </div>";
    echo " </div>";
	echo " <div class=\"step disabled\" onclick=\"contact()\" id=\"contactbtn\">";
    echo " <div class=\"content\">";
    echo "  <div class=\"title\">Details</div>";
    echo "  <div class=\"description\">Contact information</div>";
    echo " </div>";
    echo " </div>";
    echo "	<div class=\"disabled step\" id=\"billingbtn\" onclick=\"billing()\">";
    echo " <div class=\"content\">";
    echo " <div class=\"title\">Billing</div>";
    echo " <div class=\"description\">Payment and verification</div>";
    echo " </div>";
	echo "</div>";
    echo "<div class=\"disabled step\" onclick=\"confirmdetails()\" id=\"confimationbtn\">";
    echo "<div class=\"content\">";
    echo " <div class=\"title\">Confirm Details</div>";
    echo "  <div class=\"description\">Verify order details</div>";
    echo " </div>";
    echo " </div>";
    echo " <div class=\"disabled step\" id=\"finishbtn\">";
    echo "<div class=\"content\">";
    echo " <div class=\"title\">Finish and Print</div>";
    echo " <div class=\"description\">Printing Ticket</div>";
    echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "<br>";
	echo "<div id=\"dynamic\">";

	echo "<div class=\"ui container text\" id=\"booking-page\">";
	echo "<div class=\"ui attached message\">";
	echo "<div class=\"header\">Booking Info</div>";
    echo "<div class=\"header\">Order Ref: <span style=\"color:red;font-size:15px\">";
	echo "<a href='index.php'>Cancel Order</a></span> </div>";
	echo "<p>Enter traveling booking info</p>";
	echo "</div>";

	echo "<form class=\"ui form attached fluid loading segment\" onsubmit=\"return contact(this)\">";
    echo "<div class=\"field\">";
    echo "<label>Destination</label>";
	echo "<div class=\"field\">";
    echo "<select required id=\"destination\">";
    echo "  <option value=\"\" selected disabled>--Travel Destination--</option>";
	echo "		<option value=\"Singapore to Kuala Lumpur \">Singapore to Kuala Lumpur </option>";
	echo "		<option value=\"Kuala Lumpur to Penang\">Kuala Lumpur to Penang </option>";
	echo "		<option value=\"Johor to Kuala Lumpur\">Johor to Kuala Lumpur </option>";
	echo "		<option value=\"Penang to Cameron Highlands \">Penang to Cameron Highlands </option>";
	echo "		<option value=\"Penang to Singapore\">Penang to Singapore </option>";
	echo "		<option value=\"Penang to Kuala Lumpur\">Penang to Kuala Lumpur </option>";
	echo "		<option value=\"Kuala Lumpur to Johor\">Kuala Lumpur to Johor </option>";
	echo "		<option value=\"Singapore to Malacca\">Singapore to Malacca </option>";
	echo "		<option value=\"Ipoh to Kuala Lumpur \">Ipoh to Kuala Lumpur </option>";
	echo "		<option value=\"Penang to Malacca\">Penang to Malacca </option>";
	echo "		<option value=\"Singapore to Hatyai\">Singapore to Hatyai</option>";
	echo "		<option value=\"Malacca to Singapore \">Malacca to Singapore </option>";
	echo "		<option value=\"Kuala Lumpur to Ipoh\">Kuala Lumpur to Ipoh </option>";
	echo "		<option value=\"Malacca to Penang\">Malacca to Penang </option>";
	echo "		<option value=\"Singapore to Penang\">Singapore to Penang </option>";
	echo "		<option value=\"KLIA to Kuala Lumpur\">KLIA to Kuala Lumpur </option>";
	echo "		<option value=\"Ipoh to Singapore\">Ipoh to Singapore </option>";
	echo "		<option value=\"Singapore to Genting Highlands\">Singapore to Genting Highlands</option>";
	echo "		<option value=\"Singapore to Ipoh \">Singapore to Ipoh </option>";
	echo "		<option value=\"Kuala Lumpur to KLIA \">Kuala Lumpur to KLIA </option>";
	echo "		<option value=\"Kuala Lumpur to Singapore\">Kuala Lumpur to Singapore </option>";
	echo "		<option value=\"Singapore to Genting Highlands\">Singapore to Genting Highlands</option>";
    echo "</select>";
	echo "</div>"; 
	echo "</div>";
	echo "<div class=\"field\">";  
    echo "<label>Type of bus</label><span>";
	echo "<div class=\"field\">";
    echo "<select name=\"gender\" required id=\"typeofbus\">";
    echo "<option value=\"\" selected disabled>--Type of Bus--</option>";
    echo "  <option value=\"Single-decker\">Single-decker</option>";
	echo "  <option value=\"Double-decker\">Double-decker</option>";
	echo "  <option value=\"Deluxe\">Deluxe</option>";
	echo " <option value=\"Coach\">Coach</option>";
	echo "</select>";
	echo "</div>";  
	echo "</div>";
	echo "<div class=\"two fields\">";
	echo "<div class=\"field\">";
    echo "<label>Number of Seats</label>";
	echo "<input placeholder=\"Number of Seats\" type=\"number\" id=\"seats\" min=\"1\" max=\"72\"  value=\"1\" required>";
    echo "</div>";
	echo "<div class=\"field\">";
    echo "<label>Date of Travel</label>";
	echo "<input type=\"text\" readonly required id=\"traveldate\" class=\"datepicker-here form-control\" placeholder=\"ex. July 03, 2021\">";
	echo "</div>";  
	echo "</div>";
	echo "<div style=\"text-align:center\">";
	echo "<div><label>Ensure all details have been filled correctly</label></div>";
    echo "<button class=\"ui green submit button\">Submit Details</button>";
	echo "</div>";
	echo "</form>";
	echo "</div>";


	echo "<div class=\"ui container text\" id=\"contact-page\" style=\"display:none\">";
	echo "<div class=\"ui attached message\">";
    echo "<div class=\"header\">Enter your Customer Details! </div>";
    echo "<div class=\"header\">Order Ref: <span style=\"color:red;font-size:15px\">";
	echo "<a href='index3.php'> Cancel Order</a></span> </div>";
	echo "<p>Fill the required Fields</p>";
	echo "</div>";
	echo "<form class=\"ui form attached fluid loading segment\" onsubmit=\"return billing(this)\">";
    echo "<div class=\"field\">";
    echo "  <label>Full name</label>";
    echo "  <input placeholder=\"Full name\" type=\"text\" id=\"fullname\" required>";
    echo "</div>";

	echo "<div class=\"field\">";
    echo "<label>Contact/Mobile or Email address</label>";
    echo "<input placeholder=\"Mobile No/Contact or Email address\" type=\"text\" id=\"contact\" required>";
	echo "</div>";

	echo "<div class=\"field\">";
    echo "<label>Gender</label>";
	echo "<div class=\"field\">";
    echo "<select name=\"gender\" required id=\"gender\">";
    echo "  <option value=\"\" selected disabled>--Choose Gender--</option>";
    echo "  <option value=\"MALE\">Male</option>";
    echo "  <option value=\"FEMALE\">Female</option>";
    echo "</select>";
	echo "</div> ";  
	echo "</div> ";
 
	echo "<div style=\"text-align:center\">";
	echo "<div><label>Ensure all details have been filled correctly</label></div>";
	echo "<button class=\ui green submit button\">Submit Details</button>";
	echo "</div>";
  
    echo "</form>";
    echo "</div>";

	echo "<div class=\"ui container text\" id=\"billing-page\" style=\"display:none\">";
	echo "<div class=\"ui attached message\">";
    echo "<div class=\"header\">Validate Payment Information</div>";
    echo "<div class=\"header\">Order Ref: <span style=\"color:red;font-size:15px\">";
	echo "<a href='index3.php'>Cancel Order</a></span> </div> ";
    echo "<p>Enter Payment Details to Proceed</p>";
	echo "</div>";

	echo "<form class=\"ui form attached fluid loading segment\" onsubmit=\"return confirmdetails(this)\">";
    echo "<div class=\"field\"> ";
	echo "<label>Payment</label>";
    echo "<select name=\"gender\" required id=\"paymentmethod\">";
    echo "  <option value=\"\" selected disabled>Method of Payment</option>";
    echo "  <option value=\"\">CIMB BANK</option>";
    echo "  <option value=\"\">HSBC BANK</option>";
	echo "  <option value=\"\">MAYBANK</option>";
    echo "</select>";
	echo "</div> ";
	echo "<div class=\"field\">"; 
	echo "<label>Transaction ID</label>";
	echo "<div class=\"ui icon input\">";
	echo "<input placeholder=\"Transaction Code\" type=\"text\" required id=\"codebox\">";
	echo "<i class=\"payment icon\"></i>";
	echo "</div>";
	echo "</div>";

	echo "<div class=\"field\">";
	echo "<label>Confirm Amount(RM)</label>";

	echo "<div class=\"ui icon input\">";
	echo "<input value=\"20.00\" type=\"text\" id=\"amount\" readonly>";
	echo "</div></div>";
	echo "<div style=\"text-align:center\">";
	echo "<button class=\"ui green submit button\">Proceed</button>";
	echo "</div>";
	echo "</form>";
	echo "<div class=\"ui bottom attached warning message\"><i class=\"icon help\"></i><b id=\"payment-info\"></b></div>";
	echo "</div>";


	echo "<div class=\"ui text container\" id =\"confirmdetails-page\" style=\"display:none\">";
	echo "<div class=\"ui positive message\">";
	echo "<b>Before proceeding, re-check the following details you provied</b><br>";
	echo "<i>Ticket might not be re-printed, hence details you provided should be valid</i>";
	echo "<br>";
	echo "<div class=\"ui horizontal divider\">The Details Provided</div>";
	echo "<div id=\"details\"></div>";
	echo "<div class=\"ui horizontal divider\">Confirm Details</div>";
	echo "<div class=\"ui fluid container center aligned\">";
	echo "<a class=\"ui button green\" onclick=\"senddata()\">YES|Confirm</a>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";

    ?>
    </body>
    </html>