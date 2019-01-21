<?php
if(isset($_POST['submit'])){
$server="localhost";
$user="root";
$pass="";
$dbname="food";

//creating connection for mysqli

$conn = new mysqli($server,$user,$pass,$dbname);

//checking connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$a = mysqli_real_escape_string($conn, $_POST['firstname']);
$b = mysqli_real_escape_string($conn, $_POST['lastname']);
$c = mysqli_real_escape_string($conn, $_POST['password1']);
$d = mysqli_real_escape_string($conn, $_POST['age']);
$e = mysqli_real_escape_string($conn, $_POST['birthday']);
$f = mysqli_real_escape_string($conn, $_POST['phone']);
$h = mysqli_real_escape_string($conn, $_POST['email']);



$sql="INSERT INTO signin (Firstname, Lastname, Age, Email, DOB, Phone, Password) VALUES ('$a','$b','$d','$h','$e','$f','$c')";

if ($conn->query($sql) === TRUE) {
	
    //echo "<h3 style='color:blue;'>Database created</h3>";
	 echo '<script type="text/javascript">';
     echo 'setTimeout(function () { swal("WOW!","Database Created!","success");';
     echo '}, 1000);</script>';
	header("refresh:5;url=log in.php");
}
 else {
    echo "Error creating database: " .$sql . "<br/>" . $conn->error;
}


$conn->close();

}


?>




<html>
<title>first sign up</title>
<head>
<div>
<link rel="stylesheet" type="text/css" href="new.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
function validform1()
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
<h2>Sign Up Here</h2></center>
</div>
<hr>
</head>
<body>
<center><br>
<form style="color:black;font-style:italic;" method="POST" action ="sign in.php" onsubmit="return validform1();";">
<table>
<tr>
<td> First Name:- </td>
<td><input type="text" name="firstname" id="firstName"  required></td>
</tr>
<tr>
<td>Last Name:-</td>
<td><input type="text" name="lastname"  required></td>
</tr>
<tr>
<td>Age:-</td>
<td><input type="number" name="age" min="5" required></td>
</tr>
<tr>
<td>Email Id:-</td>
<td><input type="text" name="email" required></td>
</tr>
<tr>
<td>Date of birth:-</td>
<td><input type="date" name="birthday" required></td>
</tr>
<tr>
<td>Phone NO.:-</td>
<td><input type="text" name="phone" id="phone" ></td>

</tr>
<tr>
<td>Password:-</td>
<td><input type="password" name="password1" id="password1" required></td>
</tr>
<tr>
<td>Re-Type password:</td>
<td><input type="password" id="password2" required></td>
</tr>
</table><br><br>
<input type="radio" name="terms" value="terms" required>I agree the terms and conditions<br><br>
<input type="submit" name="submit" value="sumbit">
</center>
</form>
</body>
</html>