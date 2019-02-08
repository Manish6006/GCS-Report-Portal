<?php

//inserting the data on details table
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cc";

$success="";
$error="";

if(isset($_POST['submit'])){

	$statement=$_POST['statement'];
	$incident=$_POST['incident'];
	$severity=$_POST['severity'];
	$curentstatus=$_POST['curentstatus'];
	$deploymentphase=$_POST['deploymentphase'];
	$closuredate=$_POST['closuredate'];
	$duration=$_POST['duration'];
	$serviceimpact=$_POST['serviceimpact'];
	$subcategory=$_POST['subcategory'];
	$problemcat=$_POST['problemcat'];
	$rcasubmission=$_POST['rcasubmission'];
	$report=$_POST['report'];
	$productversion=$_POST['productversion'];
	$reported=$_POST['reported'];
	$restored=$_POST['restored'];
	$productname=$_POST['productname'];
	$customername=$_POST['customername'];
	$remarks=$_POST['remarks'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO details (statement,incident,severity,customername,productname,reported,restored,productversion,report,rcasubmission,problemcat,subcategory,serviceimpact,duration,closuredate,deploymentphase,curentstatus, remarks)
VALUES ('$statement','$incident','$severity','$customername','$productname','$reported','$restored','$productversion','$report','$rcasubmission','$problemcat','$subcategory','$serviceimpact','$duration','$closuredate','$deploymentphase','$curentstatus','$remarks')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


// sending mail
 // echo $statement."".$incident."".$severity;
		
		require 'PHPMailer/PHPMailerAutoLoad.php';

			$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
		    //Server settings
		   // $mail->SMTPDebug = 4;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'chutokumar20@gmail.com';                 // SMTP username
		    $mail->Password = 'Manish@6006';                           // SMTP password
		    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('chutokumar20@gmail.com', 'Sd Global(Manish)');
		    $mail->addAddress('manish.sharma591@gmail.com', 'Roopendra Kumar Sharma');     // Add a recipient
		 

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Here is the subject';
		    $mail->Body='
		    <script>
			    .trr{
			    height: 55px;
			}
			</script>

<form method="GET">
<table border="1"  
		align="center" 
		width="90%"
		style="border-collapse: collapse;">

	<tr class="trr">
<td colspan="4" style="text-align:center; background-color:#95a5a6; border: 0" >
	<label style="font-size: 18px;"> <strong><u>Report Summary & Current Status</u></strong></label>
</td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;"><strong>Problem Statement</strong></td>
<td colspan="3">
				  <p> ' . $statement . ' </p>
				  </td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;">Incident No </td>
<td>
					<p> ' . $incident . ' </p>
</td>

<td style="background-color:#95a5a6;"><strong>Incident Severity</strong></td>
<td>
					<p> ' . $severity . ' </p>
		</td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;">Customer Name</td>
<td>

 		<p> ' . $customername . ' </p>

</td>
<td style="background-color:#95a5a6;">Product Name</td>
<td>

 		<p> ' . $productname . ' </p>

		</td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;"><strong>Date/time of incident (Reported)</strong>
</td>
<td rowspan="2">
			<p> ' . $reported . ' </p>
		  <br/>
		  <br/> 
		  <p> ' . $restored . ' </p>
		</td>

<td rowspan="2" style="background-color:#95a5a6;">
	<strong>Product name and Version</strong>
</td>
<td rowspan="2">
	<p> ' . $productversion . ' </p>
</td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;"><strong>Date/time of incident (Restored)</strong></td>
</tr>
<tr>
<td style="background-color:#95a5a6;">RCA Report Status</td>
<td>
	<p> ' . $report . ' </p>
	</td>

<td style="background-color:#95a5a6;">RCA Submission Date(dd/mm/yy)</td>
<td>
	<p> ' . $rcasubmission . ' </p>
	</td>
</tr>


<tr class="trr">
<td style="background-color:#95a5a6;">Problem Category</td>
<td>
<p> ' . $problemcat . ' </p>
	</td>

<td style="background-color:#95a5a6;">Sub Category</td>
<td>
<p> ' . $subcategory . ' </p>
	</td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;">Service Impact</td>
<td>
<p> ' . $serviceimpact . ' </p>
</td>
<td style="background-color:#95a5a6;">Duration of Service impact(hh:mm:ss)</td>
<td><
<p> ' . $duration . ' </p>
	</td>
</tr>

<tr>
<td style="background-color:#95a5a6;">Incident Closure Date(dd/mm/yy)</td>
<td>
<p> ' . $closuredate . ' </p>
	</td>

<td style="background-color:#95a5a6;">Deployment Phase</td>
<td >
		<p> ' . $deploymentphase . ' </p>
		</td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;">Current Status</td>
<td colspan="3">
			<p> ' . $curentstatus . ' </p>
					</td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;">Remarks</td>
<td colspan="3">
				  <p> ' . $remarks . ' </p>
					</td
</table>
</form>';

		    $mail->send();
		    $success='Message has been sent';
		    header("location: Outage_form.php?submit=Message has sent");



		} catch (Exception $e) {
		    //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		    $error='Message could not be sent. Mailer Error: ';
		}
	}		
?>



<!DOCTYPE html>
<html>
<head>
	<title>
		 RCA & Outage Form 
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" type="image/ico" href="img/mahindraline.ico">
	<link rel="stylesheet" type="text/css" href="outage.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery.searchable.js"></script>
  <script type="text/javascript" src="jquery.searchable-ie.js"></script>
	<!-- <script type="text/javascript" src="myjs.js"></script> -->

<!-- THIS IS NEW ADDED CODE HERE 10TH JAN,2019 -->
<script>
	var isNS = (navigator.appName == "Netscape") ? 1 : 0;

		if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);

			function mischandler(){
					return false;
			}

				function mousehandler(e){
					var myevent = (isNS) ? e : event;
						var eventbutton = (isNS) ? myevent.which : myevent.button;
							if((eventbutton==2)||(eventbutton==3)) return false;
			}
				document.oncontextmenu = mischandler;
				document.onmousedown = mousehandler;
				document.onmouseup = mousehandler;
</script>


</head>


<body id="body" style="height: 100%;"  data-gr-c-s-loaded="true">

	<div class="se-pre-con" style="display: none;"></div>

	<div class="HeadBanner" style=" box-shadow: 6px 6px 2px grey;">
		
		<div class="container-fluid">
			<div class="row" style="background-color: #E31837; color: white;">
				
				<div class="col-sm-4" style=" padding-bottom: 5px;">
					<img src="img/trans_white_mahindralogo.png" style="width: 200px; height: 50px;">
				</div>
					<div class="col-sm-4 text-center" style="font-size: 23pt; padding-top: 3px; padding-bottom: 5px; text-shadow: 2px 2px 4px #000000;">
						<span style="height: 40px;"> Report Portal</span>
					</div>

					<div class="col-sm-4" style="font-size: 13pt; padding-top: 15px; text-align: right; 
						padding-right: 15px;
					padding-bottom: 5px;">
						
						<span style="height: 40px;">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome to <?php session_start(); echo strtoupper($_SESSION['usr'])?>&nbsp;&nbsp;&nbsp;|&nbsp;
							<a href="logout.php" style="color:white;"> Logout</a>
						</span>
					</div>
			</div>
			
		</div>
	</div>

<div class="container-fluid" style="padding-top: 50px;">
		<div class="row">
			<div class="col-sm-12">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
  					<li class="nav-item">
   						 <a class="nav-link active" id="home-tab" data-toggle="tab" href="#newform" role="tab" aria-controls="home" aria-selected="true">Fill New Form</a>
 					 </li>
  					<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
  					<li class="nav-item">
   						 <a class="nav-link" id="profile-tab" data-toggle="tab" href="#editform" role="tab" aria-controls="profile" aria-selected="false">Update Form</a>
  					</li>
  
				</ul>

<div class="tab-content" id="myTabContent" style="padding-top: 30px;">
  <div class="tab-pane fade show active"
  		 id="newform" 
  		 role="tabpanel" 
  		 aria-labelledby="home-tab">
  	
  		 
  		<form method="POST"> <!-- NEW CODE ADDED FROM NOW. THIS IS CONE OF NEW PROJECT-->
<table border="1" class="tablediv" 
		align="center" 
		width="90%"
		style="border-collapse: collapse;">

	<tr class="trr">
<td colspan="4" style="text-align:center; background-color:#95a5a6; border: 0" >
	<label style="font-size: 18px;"> <strong><u>Report Summary & Current Status</u></strong></label>
</td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;"><strong>Problem Statement</strong></td>
<td colspan="3">
				  <input
				  type="text" 
						style=" text-align: center; height: 51px;border: 0;" 
						name="statement"
						size="135"
						placeholder="Enter Problem Statement"/>
					</td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;">Incident No </td>
<td>
					<input 
					type="text" 
					name="incident" 
					placeholder="Enter Incident Number" 
					size="46px" 
					style="text-align: center;border: 0;
					height: 51px ;" required>
</td>

<td style="background-color:#95a5a6;"><strong>Incident Severity</strong></td>
<td>
					<input  
					type="text" 
					name="severity" 
					size="46px"
					placeholder=" Enter Incident Severity" 
					style="text-align: center;border: 0;
					height: 51px;">
		</td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;">Customer Name</td>
<td><input type="text" 
			name="customername" 
			placeholder="Enter Customer Name"
			size="46px"
			style="text-align: center;
			border: 0;
					height: 51px;">
</td>
<td style="background-color:#95a5a6;">Product Name</td>
<td><input type="text"
		  name="productname"
	size="46px"
		  placeholder="Enter Product Name"
		  style="text-align: center;
		  border: 0;
					height: 51px;">  
		</td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;"><strong>Date/time of incident (Reported)</strong>
</td>
<td rowspan="2"><input type="text"
		  name="reported"
		  size="46px" 
		  style="text-align: center;
		  border: 0;
					height: 51px;"
		  placeholder="YYYY-MM-DD HH:MM:SS">
		  <br/>
		  <br/> 
		  <input type="text"
		  name="restored"
		  size="46px"
		  style="text-align: center;
		  border: 0;
					height: 51px;"
		  placeholder="YYYY-MM-DD HH:MM:SS">
		</td>
<td rowspan="2" style="background-color:#95a5a6;">
	<strong>Product name and Version</strong>
</td>
<td rowspan="2">
	<input type="text" 
	style="text-align: center;
	border: 0;
					height: 125px;"
	name="productversion" 
size="46px"
	placeholder="Enter Product Name & Version">
</td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;"><strong>Date/time of incident (Restored)</strong></td>
</tr>
<tr>
<td style="background-color:#95a5a6;">RCA Report Status</td>
<td><input type="text" 
	name="report" 
	size="46px"
	style="text-align: center;
	border: 0;
					height: 51px;"
	placeholder="Enter RCA Report Status"></td>
<td style="background-color:#95a5a6;">RCA Submission Date<br>(YYYY-MM-DD)</td>
<td><input type="text" 
	name="rcasubmission" 
	size="46px"
	style="text-align: center;
	border: 0;
					height: 51px;"
	placeholder="Enter RCA Submission Date"></td>
</tr>


<tr class="trr">
<td style="background-color:#95a5a6;">Problem Category</td>
<td><input type="text" 
	name="problemcat" 
	style="text-align: center;
	border: 0;
					height: 51px;"
					size="46px"
	placeholder="Enter Problem Category"></td>
<td style="background-color:#95a5a6;">Sub Category</td>
<td><input type="text" 
	name="subcategory"
	size="46px"
	style="text-align: center;
	border: 0;
					height: 51px;"
	placeholder="Enter Sub Category"></td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;">Service Impact</td>
<td><input type="text" 
	style="text-align: center;
	border: 0;
					height: 51px;"
					size="46px"
	name="serviceimpact" placeholder="Enter Service Impact">
</td>
<td style="background-color:#95a5a6;">Duration of Service impact(HH:MM:SS)</td>
<td><input type="text" 
	name="duration" 
	size="46px"
	style="text-align: center;
	border: 0;
					height: 51px;"
	placeholder="Enter Duration of Service Impact"></td>
</tr>

<tr>
<td style="background-color:#95a5a6;">Incident Closure Date<br>(YYYY-MM-DD)</td>
<td><input type="text" 
	name="closuredate" 
	size="46px"
	style="text-align: center;
	border: 0;
					height: 51px;"
	placeholder="Enter Closure Date"></td>
<td style="background-color:#95a5a6;">Deployment Phase</td>
<td ><input type="text" 
	name="deploymentphase"
size="46px"
	style="text-align: center;
	border: 0;
					height: 51px;"
	placeholder="Enter Deployment Phase"></td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;">Current Status</td>
<td colspan="3">
				  <input type="text"  
						style="text-align: center;
						border: 0;
					height: 51px;" 
						name="curentstatus"
						size="135"
						placeholder="Enter Current Status"/>
					</td>
</tr>

<tr class="trr">
<td style="background-color:#95a5a6;">Remarks</td>
<td colspan="3">
				  <input type="text"  
						style="text-align: center;
						border: 0;
					height: 51px;" 
						name="curentstatus"
						size="135"
						placeholder="Enter Remarks"/>
					</td>
</table>

<!-- NEW CODE ADDED FROM NOW. THIS IS CONE OF NEW PROJECT-->
<!--  -->
<!--  -->
<!--  -->
<!-- NEW CODE ADDED FROM NOW. THIS IS CONE OF NEW PROJECT-->
<!-- 
ADDING BUTTON LAYOUT-> 2019/01/09
TASK 01
 -->
<div class="container" align="center" style="padding-top: 25px;">
	<input type="submit" name="submit" value="Send" class="btn btn-outline-primary" style="width: 100px;">
</div>
</form>

  </div>
  				<div class="tab-pane fade" id="editform" role="tabpanel" aria-labelledby="profile-tab">
  						<div class="row">
						<div class="col-sm">
							<input type="text" name="search" id="search" placeholder="Enter Incident Number" class="form-control" style="width: 300px;"> 
						</div>
						<div class="col-sm">
							<input type="submit" 
							name="submit" 
							id="submit" class="btn btn-outline-primary"> 
						</div>

					<!-- <div class="col-sm-6"></div> -->

						<div class="col-sm-8">
						</div>

					</div>
  			</div>
		</div>
	</div>
</div>

<!-- 
ADDING FOOTER LAYOUT-> 2019/01/09
TASK 01
 -->	
 <div style="padding-top: 20px;"></div>
	<script>
		$('.responsive-tabs').responsiveTabs({
		  accordionOn: ['xs', 'sm']
		});
	</script>
</body>
</html>