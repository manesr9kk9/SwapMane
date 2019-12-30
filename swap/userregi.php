<?php include 'connect.php'?>
<?php
session_start();
if(isset($_COOKIE["cname"]))
{
$uname = $_COOKIE["cname"];
}
else
{
	$uname = "Guest";
}
$upass = $_COOKIE["cpass"];
$email = $_SESSION["smail"];
$mobile = $_SESSION["smobile"];

//echo "Connection is successfull";

$sql = "Insert into user (username,password,email,mobile) 
values('$uname','$upass','$email',$mobile)";

//echo "<br/>" .  $sql . "<br/>";

//echo mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql))
{
	echo "User registered successfully in database";
}
else
{
	echo "Error : " . $sql . "<br/>" . mysqli_error();
}



mysqli_close($conn);


?>