<?php include('dbconfig.php');?>

<?php

$name=$_POST['referencename'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$name2=$_POST['referncename2'];
$address2=$_POST['address2'];
$phone2=$_POST['phone2'];
$email=$_POST['email'];

$sql = "INSERT INTO `online_passport`.`references` (`reference name 1`, `address 1`, `phone 1`, `reference name 2`, `address 2`, `phone 2`,`email`) 
VALUES ('{$name}','{$address}', '{$phone}', '{$name2}', '{$address2}', '{$phone2}','${email}');";
$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
  die('Could not enter data: ' . mysqli_error($conn));
}

echo'	<script type="text/javascript">
					alert("Data added Successfuly");
				window.location = "appointment2.php";
			</script>';					
mysqli_close($conn);
?>