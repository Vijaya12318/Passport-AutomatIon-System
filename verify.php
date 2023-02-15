<?php include('dbconfig.php');?>
<?php


$username=$_POST['email'];
$password=$_POST['password'];
$query = mysqli_query($conn,"select * from admin_details where password='$password' AND email='$username'");
$result=mysqli_num_rows($query);
echo $result;
if ( mysqli_num_rows($query) == 1)
{
echo '<script language="Javascript">
	alert("Logged In successfully ");
	window.location=("sasi_Admin.php");</script>';
} 
else
 {
echo '<script language="Javascript">
	alert("Invalid Username Or Password ");
	window.location=("validate_Admin.php");
	</script>';
}
mysql_close($connection); // Closing Connection
?> 