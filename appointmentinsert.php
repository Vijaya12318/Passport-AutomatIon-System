<?php include('dbconfig.php');?>

<?php
$locality=$_POST['locality'];
$date=$_POST['date'];
$time=$_POST['time'];
$email=$_POST['email'];

$sql = "INSERT INTO `online_passport`.`appointment_details` (`passport office details`, `date`, `time`)
VALUES ('{$locality}','{$date}', '{$time}');";
$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
  die('Could not enter data: ' . mysqli_error($conn));
}

echo'	<script type="text/javascript">
					alert("Data added Successfuly");
				window.location = "temp.php";
			</script>';					
mysqli_close($conn);
?>