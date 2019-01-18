
<?php

session_start();
$_SESSION=array();

session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Logout
	</title>
	<link rel="icon" type="image/ico" href="img/mahindraline.ico">
</head>
<body>



<style type="text/css">
html, body {
	margin: 0;
	padding: 0;
	border: 0;

	height: 100%;
	overflow: hidden;
}
iframe {
	width: 100%;
	height: 100%;
	border: 0
	
}
</style>
<div style="display:table; position: absolute;height: 100%;  width: 100%; background-color:#fff;">
<div style="margin-left: auto ;margin-right: auto;  display:table-cell; vertical-align:middle; width:100%;" align="center">
<div id="wrapper" style="height:450px; width:700px;border:1px solid red; box-shadow:2px 2px 10px black; font:1.0em arial;background-color:#bdc3c7;" align="center">
</br></br></br></br></br></br></br></br>
<center>
You Logout successfully!!!!
</br></br></br>
Thank you for using our <strong>GCS Outage report portal</strong>.
</br></br></br>
To login again <a href="newindex.php" style="color: red;"><strong>click here</strong></a>
</center>
</div>
</div>
</div>



</body>
</html>