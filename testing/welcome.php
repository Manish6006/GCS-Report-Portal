<?php 


$error='';

session_start();

if(isset($_POST['login'])) {

		if(empty($_POST['Uname'])|| empty($_POST['Passwd'])){

			$error="Username or Password is invalid";
		}
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