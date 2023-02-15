<?php include('dbconfig.php');?>
<?php

$aadhar=$_POST['aadhar'];
$approve_disapprove=$_POST['approve_disapprove'];

$sql = "INSERT INTO `online_passport`.`approve_disapprove` (`aadhar card number`, `Approve_disapprove`) VALUES ('{$aadhar}','{$approve_disapprove}');";
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('Could not enter data: ' . mysqli_error($conn));
}

echo'	<script type="text/javascript">
					alert("Data Added successfully");
				window.location = "approve_disapprove.php";
			</script>';					
mysqli_close($conn);
?>