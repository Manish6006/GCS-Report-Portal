<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cc";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$query="select  id,incident,customername,productname,statement,reported,duration,serviceimpact,curentstatus,remarks from details";


$result=mysqli_query($conn,$query);

$rowcount=mysqli_num_rows($result);
 
?>





<!DOCTYPE html>
<html>
<head>
	<title></title>

<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" type="image/ico" href="img/mahindraline.ico">
	<link rel="stylesheet" type="text/css" href="tab.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

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
<!-- DASHBORD COLUMN-->						<span style="height: 40px;">Dashboard</span>
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


<!-- SEARCH OPTION -->

					<div class="row" style="padding-left: 10px; padding-top: 30px;">
						<div class="col-sm">
							<LABEL style="font-size: 17px;">No of entries:&nbsp;<?php printf("%d",$rowcount); ?></LABEL>
						</div>
						<div class="col-sm"></div>

						<div class="col-sm-6">
						</div>
						<div class="col-sm">
							<input type="text" name="search" id="search" placeholder="Search Here..." class="form-control" style="width: 300px;"> 
						</div>
						<div>&nbsp;&nbsp;</div>
					</div>
				

			<!-- TABLE SECTION -->
			<div class="table-responsive" style="padding-top: 30px;padding-left: 10px; padding-right: 10px;">
				<table class="table table-sm table-hover">
					<thread>
						<tr class="table-active">
							<th>S.NO</th>
							<th>Incident Number</th>
							<th>Customer</th>
							<th>Product</th>
							<th>Problem Statement</th>
							<th>Issue Start(Date & Time)</th>
							<th>Time Lapsed</th>
							<th>Outage Type</th>
							<th>Updated Status</th>
							<th>Remarks</th>
						</tr>
					</thread>

<?php
if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}
else
{ 

while($row=mysqli_fetch_row($result)) {?>
 
<tbody id="report_table">
	<tr>
	 	<td><?php echo $row[0]?></td>
	  	<td><?php echo $row[1]?></td>
	   	<td><?php echo $row[2]?></td>
	    <td><?php echo $row[3]?></td>
	    <td><?php echo $row[4]?></td>
	    <td><?php echo $row[5]?></td>
	    <td><?php echo $row[6]?></td>
	    <td><?php echo $row[7]?></td>
	    <td><?php echo $row[8]?></td>
	    <td><?php echo $row[9]?></td>
	  </tr>
	</tbody>
	<?php
		}
						
}
mysqli_close($conn);
?>	
			</table>
			
		</div>
</body>
</html>

<script>
		$(document).ready(function(){
			$('#search').keyup(function(){
				search_table($(this).val())
			});

			function search_table(value){

				$('#report_table tr').each(function(){
						var found='false';
						$(this).each(function(){
							if($(this).text().toLowerCase().indexOf(value.toLowerCase())>=0)
							{
								found='true';
							}
						});
						if(found=='true')
						{
							$(this).show();
						}
						else
						{
							$(this).hide();
							
						}
				});
			}
		});
</script>