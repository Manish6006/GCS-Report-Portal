<?php 

$error='';

session_start();

if(isset($_POST['login'])) {

    if(empty($_POST['Uname'])|| empty($_POST['Passwd'])){

      $error="Username or Password is invalid";

    }

   // TOGGLE BUTTON VALIDATION AND DASHBOARD PAGE RENDERING 
       else if(isset($_POST['checkbox'])){
       $username=$_POST['Uname'];
       $password=$_POST['Passwd'];
        $conn=mysqli_connect("localhost","root","");

        $db=mysqli_select_db($conn,"cc");

        $query=mysqli_query($conn, "SELECT * FROM dashtable WHERE username='$username' AND password='$password'");
          
        $rows=mysqli_num_rows($query);

        if($rows==1){
          //echo "logged in successfully!!!!!!"." "." ".$_POST['Uname'];
          
                header("location:dashboard.php");
                $_SESSION['usr']=$username;
            } else{
                     $error="Username or Password is invalid";
                } 
       } 

       //THIS IS VALIDATION OF THE LOGIN PAGE AND RENDERING REPORT PAGE.          
    else{

      $username=$_POST['Uname'];
      $password=$_POST['Passwd'];


  $conn=mysqli_connect("localhost","root","");

  $db=mysqli_select_db($conn,"cc");

  $query=mysqli_query($conn, "SELECT * FROM logintable WHERE username='$username' AND password='$password'");
    
  $rows=mysqli_num_rows($query);

  if($rows==1){
    //echo "logged in successfully!!!!!!"." "." ".$_POST['Uname'];
    header("location:Outage_form.php");
    $_SESSION['usr']=$username;

  }else{
    $error="Username or Password is invalid";
  }

  mysqli_close($conn);

    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

<link rel="icon" type="image/ico" href="img/mahindraline.ico">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="form.css">
  <link rel="stylesheet" type="text/css" href="button_tog.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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

<!-- FOR TOGGLE BUTTON SELECTION SCRIPT -->
<script type="text/javascript">
  $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                //alert(" is checked.");
      $("#dash").html("Dashboard Selected");
      $("#dash").css('color', 'red');
    
            }
            else if($(this).prop("checked") == false){
               // alert("Checkbox is unchecked.");
         $("#dash").html("Dashboard");
         $("#dash").css('color', 'black');
            }
        });
    });
</script>

 </head>
<body >

<img src="img/watermark_last.png" align="left" style="height: 50px; width: 200px;padding-top: 0px;">
<div class="outage" align="right" data-gr-c-s-loaded="true" style="Palatino Linotype, Book Antiqua, Palatino, serif;">
  <p class="para" style="text-align: center;font-family: Georgia,serif;"> <h4>GCS Outage Report Portal</h4></p>
<!--   <div class="img" align="left"><img src="img/mahindraline.jpg" style="height: 100px; padding-top: 20px;"></div> -->


</div>
 
  <div class="box">
    <div class="isa_error" style="color: #D8000C; background-color: #FFD2D2; text-align: center;font-family: Arial, Helvetica, sans-serif">
        <i class="fa fa-times-circle">
        </i>
     <?php echo $error ?> 
    </div>
    
    <h2>Login</h2>
    <form method="POST">
      <div class="inputBox">
        <input type="text" name="Uname" required >
        <label><strong>Username</strong></label>
      </div>

      <div class="inputBox">
        <input type="password" name="Passwd" required>
        <label><strong>Password</strong></label>
      </div>

<!-- TOGGLE BUTTON SECTION -->
  <div class="row">
             <div style="font-family: sans-serif;padding-left: 14px;"><span id="dash">Dashboard</span><br/>
                <span >
                       <label class="switch">
                           <input type="checkbox" name="checkbox">
                              <span class="slider round">
                               </span>
                       </label>
               </span>  
            </div>
</div>

      <div align="center">
            <input type="submit" name="login" value="Submit">
          </form>
      </div>

</div>

</body>
</html>

