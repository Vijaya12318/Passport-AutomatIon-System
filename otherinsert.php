<?php include('dbconfig.php');?>
<?php

$type=$_POST['passporttype'];
$education=$_POST['education'];
$nationality=$_POST['nationality'];
$religion=$_POST['religion'];
$aadhar=$_POST['acnumber'];
$pan=$_POST['pannumber'];
$email=$_POST['email'];
$sql = "INSERT INTO `online_passport`.`other_details` (`passport type`, `educational qualificatoin`, `nationality`, `relegion`, `aadhar card number`,`pan card number`,`email`) 
VALUES ('{$type}','{$education}', '{$nationality}', '{$religion}', '{$aadhar}', '{$pan}','{$email}');";
$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
  die('Could not enter data: ' . mysqli_error($conn));
}

echo'	<script type="text/javascript">
					alert("Data added Successfuly");
				window.location = "reference2.php";
			</script>';					
mysqli_close($conn);
?>