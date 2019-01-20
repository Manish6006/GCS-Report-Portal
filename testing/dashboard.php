<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="dashboard.css">

</head>
<body>


<body id="body" style="height: 70%; width: 100%; padding:auto;"  data-gr-c-s-loaded="true">

	<div class="se-pre-con" style="display: none;"></div>

	<div class="HeadBanner" style=" box-shadow: 6px 6px 2px grey;">
		
		<div class="container-fluid">
			<div class="row" style="background-color: #E31837; color: white;">
				
				<div class="col-sm-4" style=" padding-bottom: 5px;">
					<img src="img/trans_white_mahindralogo.png" style="width: 200px; height: 50px;">
				</div>
					<div class="col-sm-4 text-center" style="font-size: 23pt; padding-top: 3px; padding-bottom: 5px; text-shadow: 2px 2px 4px #000000;">
						<span style="height: 40px;"> DASHBOARD</span>
					</div>

					<div class="col-sm-4" style="font-size: 13pt; padding-top: 15px; text-align: right; 
						padding-right: 15px;
					padding-bottom: 5px;">
						
						<span style="height: 40px;">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome to <?php session_start(); echo $_SESSION['usr']?>&nbsp;&nbsp;&nbsp;|&nbsp;
							<a href="logout.php" style="color:white;"> Logout</a>
						</span>
					</div>
			</div>
			
		</div>
	</div>

<!-- FOOTER -->
 <!-- <div class="divfooter" style="padding-top: 40px;">
<footer id="sticky" style="font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;">&copy Copyrights 2019. All rights are reserved. Mahindra Comviva, GCS</footer>
</div> -->
	
	<script>
		$('.responsive-tabs').responsiveTabs({
		  accordionOn: ['xs', 'sm']
		});
	</script>


</body>
</html>