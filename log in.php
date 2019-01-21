<?php
if(isset($_POST['submit'])){
	
$server="localhost";
$user="root";
$pass="";
$dbname="food";

	 $a=$_POST['email'];
	 $b=$_POST['pass'];
	 $c=$_POST['birthday'];
	//checking connection
   include('connection.php');
	
	$q="select * from signin where Email='$a' and Password='$b' and DOB='$c'";
	$res=mysqli_query($con,$q);
	
	if($res==true){
		$n=mysqli_num_rows($res);
		if($n==0){
			echo"<h3 style='color:red;'>Login Failed{Incorrect data}</h3>";
		}
	else{
		$arr=mysqli_fetch_assoc($res);
		//var_dump($arr);
		//session_start();
		//$_SESSION['id']=$arr['ID'];
		//$_SESSION['email']=$arr['email'];
		//echo"Login success";
		header('location:after login.html');
	}
	}
}


?>
















<html>
<title>first log in</title>
<head><div>
<link rel="stylesheet" type="text/css" href="new.css">


<script type="text/javascript">
function validform()
{
var pass1=document.getElementById("password1").value;
var pass2=document.getElementById("password2").value;
if(pass1==pass2)
{
return true;
}
else
{
alert("password don't match");
return false;
}
}
</script>


<center>
<img src="https://myfoodwp.s3.amazonaws.com/uploads/2018/08/myfoodfreshmealdelivery.png" height="10%" width="20%"><br><br>
<img src="http://my-food.pl/wp-content/uploads/2015/04/Bez-nazwy-331.jpg">
<center>
<h2>Log In Here</h2></center></div><hr>
</head>
<body>

<form style="color:black;font-style:italic;" method="POST" action ="log in.php" onsubmit="return validform();";">
<center><br>
<table>
<tr>
<th>Email Id:-</th>
<th><input type="text" name="email" required></th>
</tr>
<tr>
<th>Date of birth:-</th>
<th><input type="date" name="birthday" required></th>
</tr>
<tr>
<th>Password:-</th>
<th><input type="password" name="pass" id="password1" required></th>
</tr>

</table><br><br>
<input type="radio" name="terms" value="terms" required>I agree the terms and conditions<br><br>
<input type="submit" name="submit" value="sumbit">
</center>
</form>
</body>
</html>