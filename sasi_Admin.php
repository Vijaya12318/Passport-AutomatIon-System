<html>
<head>
<title>Display data</title>
<style>
table{border:2px solid red;
background-color:#FFC;
}
th{border:1px solid #000;
}
td{border:1px solid #666;
}
.link{
background-color:#450000;
color:#b5b575;}
</style>
</head>
<body>
<h1>Personal details of all users</h1>
<table>
<tr>
    <th>name</th>
    <th>lname</th><th>fathers name</th><th>mothers name</th><th>Date of birth</th><th>gender</th><th>marital status</th><th>address</th><th>place of birth</th><th>city</th><th>phone</th><th>email</th><th>aadhar card number</th>
</tr>
<?php include('dbconfig.php');?>
<?php
$sql = "SELECT * from `online_passport`.`personal_details`;";
$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
  die('Could not enter data: ' . mysqli_error($conn));
}
if($retval->num_rows>0){
    while($row=$retval->fetch_assoc()){
        echo "<tr><td>";
echo $row['name'];
echo "</td><td>";
echo $row['lname'];
echo "</td><td>";
echo $row['fathers name'];
echo "</td><td>";
echo $row['mothers name'];
echo "</td><td>";
echo $row['DOB'];
echo "</td><td>";
echo $row['gender'];
echo "</td><td>";
echo $row['martial status'];
echo "</td><td>";
echo $row['address'];
echo "</td><td>";
echo $row['place of birth'];
echo "</td><td>";
echo $row['city'];
echo "</td><td>";
echo $row['phone'];
echo "</td><td>";
echo $row['email'];
echo "</td><td>";
echo $row['aadhar card number'];
echo "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 result";
}
mysqli_close($conn);
?>
<h1>Other details of all users</h1>
<table>
<tr>
    <th>passport type</th>
    <th>education</th><th>nationality</th><th>religion</th><th>aadhar number</th><th>pan card number</th><th>email</th>
</tr>
<?php include('dbconfig.php');?>
<?php
$sql = "SELECT * from `online_passport`.`other_details`;";
$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
  die('Could not enter data: ' . mysqli_error($conn));
}
if($retval->num_rows>0){
    while($row=$retval->fetch_assoc()){
        echo "<tr><td>";
echo $row['passport type'];
echo "</td><td>";
echo $row['educational qualificatoin'];
echo "</td><td>";
echo $row['nationality'];
echo "</td><td>";
echo $row['relegion'];
echo "</td><td>";
echo $row['aadhar card number'];
echo "</td><td>";
echo $row['pan card number'];
echo "</td><td>";
echo $row['email'];
echo "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 result";
}
mysqli_close($conn);
?>

</table>
<a href="approve_disapprove.php" class="link">Next</a>
</body>
</html>