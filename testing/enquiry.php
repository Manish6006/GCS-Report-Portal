
<!DOCTYPE html>
<html>
<head>
	<title>
	Fill Details	
	</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="enquiry.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="myjs.js"></script>

</head>
<body>


	<h1>Fill Required Details</h1>
	<div  class="group">
		
		<label class="productlabel">Product Name:</label>
		<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="productname" onchange="show_proudct_value();">
			 <option selected>Choose...</option>
		  <option value="ECP">ECP</option> 
		  <option value="MDP">MDP</option>
		  <option value="MIG">MIG</option>
		  <option value="MSDP">MSDP</option>
		</select>
		<br/>
		<label class="sitelabel">Site Name:</label>
		<select class="custom-select mr-sm-2" id="inlineFormCustomSelect"  name="ecpsitename">
			 <option selected>Choose...</option>
		  <option value="Idea AP">Idea AP</option> 
		  <option value="Idea Delhi">Idea Delhi</option>
		  <option value="Idea KK">Idea KK</option>
		  <option value="Airtel Chad">Airtel Chad</option> 
		  <option value="Airtel Gabon">Airtel Gabon</option>
		  <option value="Airtel TZ">Airtel TZ</option>
		  <option value="MTN Congo">MTN Congo</option> 
		  <option value="MTN Cyprus">MTN Cyprus</option>
		  <option value="Nepal Telecom">NEPAL Telecom</option>
		  <option value="Vodafone Chennai">Vodafone Chennai</option> 
		  <option value="Vodafone Delhi">Vodafone Delhi</option>
		  <option value="Vodafone UPE">Vodafone UPE</option>
		</select>
		<br/>



		<label class="fromdatelabel">From Date:</label>
			<input type="Date" name="date" value="mm-dd-yyyy" class="form-control" id="firstdate" \>
		<label class=></label>

		<label class="todatelabel">To Date:</label>
			<input type="Date" name="date" class="form-control" value="mm-dd-yyyy" id="seconddate"\>
		<label class=></label>
		<br/>

		<input class="btn btn-primary" type="submit" name="btn" value="Go" onclick="" />
	</div>



</body>
</html>