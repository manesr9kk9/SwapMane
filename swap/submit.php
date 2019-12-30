<?php
session_start();
$uname=$_REQUEST["txtname"];
$upass=$_REQUEST["password"];
$upass1=$_REQUEST["password1"];
$uemail=$_REQUEST["txtemail"];
$umobile=$_REQUEST["mobile"];
$udob=$_REQUEST["dateob"];
$ugender=$_REQUEST["rdogender"];
$ueducation=$_REQUEST["chkedu"];
$ucountry=$_REQUEST["selcountry"];
$uprofile=$_REQUEST["profile"];

$education="";

foreach($ueducation as $edu)
{
 $education.=$edu.".";
}

setcookie("cname",$uname,time()+3600);
setcookie("cpass",$upass,time()+3600);

$_SESSION["smail"]=$uemail;
$_SESSION["smobile"]=$umobile;

?>


<form action="userregi.php">
<table align="center" width="60%" border="1">
<tr>
	<td>user name</td>
	<td><?php echo $uname; ?> </td>
</tr>
<tr>
	<td>password</td>
	<td><?php echo $upass; ?> </td>
</tr>
<tr>
	<td>confirm password</td>
	<td><?php echo $upass1; ?> </td>
</tr>
<tr>
	<td>email</td>
	<td><?php echo $uemail; ?> </td>
</tr>
<tr>
<td>mobile no</td>
<td><?php echo $umobile; ?> </td>
</tr>
<tr>
<td>date of birth</td>
<td><?php echo $udob; ?> </td>
</tr>
<tr>
<td>gender</td>
<td><?php echo $ugender; ?> </td>
</tr>
<tr>
<td>education</td>
<td><?php echo $education; ?> </td>
</tr>
<tr>
<td>country</td>
<td><?php echo $ucountry; ?> </td>
</tr>
<tr>
<td>profile</td>
<td><img width="100" src="/img/"><?php echo $uprofile; ?> </td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="confirm" name="confirm"></td>
<td><input type="button" value="edit" onclick="history.back();"></td>
</table>
</form>