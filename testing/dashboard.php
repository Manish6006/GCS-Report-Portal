<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="dashboard.css">
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" type="image/ico" href="img/mahindraline.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
	

<!-- FOR HIDIND THE RIGHT CLICK OF THE MOUSE -->
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
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome to 
		<?php session_start(); 
		echo strtoupper($_SESSION['usr']) ?>
		&nbsp;&nbsp;&nbsp;|&nbsp;
							<a href="logout.php" style="color:white;"> Logout</a>
						</span>
					</div>
			</div>
			
		</div>
	</div>


<!-- GRAPH SECTION STARTED FROM HERE -->

<!-- FOR FIRST GRAPH SECTION -->
	<div class="row">
 		 <div class="col-md-6" style="position: relative; height:40vh; width:50vw; padding-top: 60px;">
  				<canvas id="firstgraph"></canvas>
  		</div>
  
  			<div class="col-md-6" style="position: relative; height:40vh; width:50vw; padding-top: 60px;">
  					<canvas id="secondgraph"></canvas>
  			</div>
	</div>

<!-- SECOND GRAPH SECTION -->
      <div class="row">
         <div class="col-md-6" style="position: relative; height:50vh; width:60vw; padding-top: 160px;">
                <canvas id="thirdgraph"></canvas>
        </div>
        <div class="col-md-6" style="position: relative; height:40vh; width:50vw; padding-top: 160px;">
                    <canvas id="fourthgraph"></canvas>
            </div>
    </div>

<!-- FIRST GRAPH -->
 <script>
var ctx = document.getElementById("firstgraph").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Critical", "Major", "Minor"],
        datasets: [{
            label: 'Count of Cases',
            data: [3, 9, 11],
            backgroundColor: [
                'rgba(255,0,0)',
                'rgba(0,255,0)',
                'rgba(0,0,255)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
    </script>

<!-- SECOND GRAPH -->
<script>

var ctx1 = document.getElementById("secondgraph").getContext('2d');
var myChart1 = new Chart(ctx1, {
    type: 'pie',
    data: {
        labels: ["Within SLA", "Without SLA", "NA"],
        datasets: [{
            label: 'SLA',
            data: [12, 7, 3],
            backgroundColor: [
                'rgba(255,0,0)',
                'rgba(0,255,0)',
                'rgba(0,0,255)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
    </script>

<!-- Third Graph -->
<script>
new Chart(document.getElementById("thirdgraph"), {
    type: 'pie',
    data: {
      labels: ["Degarded Outage", "Complete Outage", "Partial Outage"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [24,52,73]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Outage Count '
      }
    }
});
</script>


<!-- FOURTH GRAPH -->
<script>
new Chart(document.getElementById("fourthgraph"), {
    type: 'pie',
    data: {
      labels: ["ECP", "MDP", "MIG","MMSC"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [24,52,73,49]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Product Wise Case Count'
      }
    }
});
</script>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

 <div class="divfooter" style="padding-top:250px;">
<footer id="sticky" style="font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;">&copy Copyrights 2019. All rights are reserved. Mahindra Comviva, GCS</footer>
</div>

	<script>
		$('.responsive-tabs').responsiveTabs({
		  accordionOn: ['xs', 'sm']
		});
	</script>


</body>
</html>