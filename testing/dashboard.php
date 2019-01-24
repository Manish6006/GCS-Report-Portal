<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="dashboard.css">
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/ico" href="img/mahindraline.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

<!-- CHART RENDER SCRIPT -->
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "Desktop Browser Market Share in 2016"
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}%",
		dataPoints: [
			{ y: 51.08, label: "Chrome" },
			{ y: 27.34, label: "Internet Explorer" },
			{ y: 10.62, label: "Firefox" },
			{ y: 5.02, label: "Microsoft Edge" },
			{ y: 4.07, label: "Safari" },
			{ y: 1.22, label: "Opera" },
			{ y: 0.44, label: "Others" }
		]
	}]
});

var chart1 = new CanvasJS.Chart("chartCont", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
       title: {
        text: " Passing chart options as a constructor parameter "
      },
      data: [
      {
        type: "column",
        dataPoints: [
        { x: 10, y: 71 },
        { x: 20, y: 55},
        { x: 30, y: 50 },
        { x: 40, y: 65 },
        { x: 50, y: 95 },
        { x: 60, y: 68 },
        { x: 70, y: 28 },
        { x: 80, y: 34 },
        { x: 90, y: 14}
        ]
      }
      ]
    });
chart.render();
chart1.render();

}
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
	<div id="chartContainer" style="height: 300px; width: 100%; padding-top: 60px; border:2px;"></div>
	<div id="chartCont" style="height: 300px; width: 100%; padding-top: 100px; border:2px;"></div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

	<script>
		$('.responsive-tabs').responsiveTabs({
		  accordionOn: ['xs', 'sm']
		});
	</script>


</body>
</html>