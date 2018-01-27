<?php
require_once 'header.php';
require_once 'conn.php';
if(isset($_POST['submit'])){
$user=$_POST["username"];
/* $pass=md5($_POST["password"]); */
$pass=$_POST["password"];
$req = "SELECT * FROM users WHERE USERNAME='$user'
AND PASSWORD='$pass'";

$result = mysqli_query($link,$req)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
{
    session_start();
    $_SESSION['profile']=$row;
    header("Location:Etudiant.php");
    echo 'hi there';
    exit;
}
else
{
    header("Location:login.php");
}
/* $row=mysqli_fetch_array($res);
echo $row;
//header("location:etudiant.php"); */
}
?>