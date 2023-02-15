<?php
$host="localhost";
$user="root";
$pass="";
$db="online_passport";
$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);
$email = $_POST['email'];
$password = $_POST['password'];

$sql="SELECT * FROM `online_passport`.`register` where `email`='$email' and `pasword`='$password';";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1)
{
    echo '<script language="Javascript">
    alert("Logged In successfully ");
    window.location=("pesonal2.php");</script>';
}
else
{
    echo '<script language="Javascript">
    alert("Invalid Username Or Password ");
    window.location=("login2.php");
    </script>';
}
                
mysqli_close($conn);

?>