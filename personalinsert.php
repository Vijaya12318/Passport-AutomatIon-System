﻿
<?php include('dbconfig.php');?>
<?php

$name=$_POST['name'];
$lname=$_POST['lastname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$ms=$_POST['maritalstatus'];
$address=$_POST['address'];
$place=$_POST['placeofbirth'];
$city=$_POST['city'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$aadhar=$_POST['aadhar'];
$sql = "INSERT INTO `online_passport`.`personal_details` (`name`, `lname`, `fathers name`, `mothers name`, `DOB`, `gender`,`martial status`,`address`,`place of birth`, `city`,`phone`,`email`,`aadhar card number`) VALUES ('{$name}','{$lname}', '{$fname}', '{$mname}', '{$dob}', '{$gender}','{$ms}', '{$address}', '{$place}', '{$city}', '{$phone}', '{$email}','{$aadhar}');";
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('Could not enter data: ' . mysqli_error($conn));
}

echo'	<script type="text/javascript">
					alert("Data Added successfully");
				window.location = "other2.php";
			</script>';					
mysqli_close($conn);
?>