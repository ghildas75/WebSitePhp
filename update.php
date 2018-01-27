<?php
require_once 'security.php';
require_once 'header.php';
require_once 'conn.php';
$code=$_POST["code"];
$nomPhoto=$_FILES['photo']['name'];
if($nomPhoto==""){
    $ps =$link->prepare("UPDATE etudiants SET Nom=?, Email=? WHERE CODE=?");
    $ps->bind_param("ssi",$nom, $email, $code);
    $nom=$_POST["nom"];
    $email=$_POST["email"];
    $ps->execute();
}
else{
  $ps =$link->prepare("UPDATE etudiants SET Nom=?, Email=?, photo=?  WHERE CODE=?");
  $ps->bind_param("sssi",$nom, $email, $nomPhoto, $code);
  $nom=$_POST["nom"];
  $email=$_POST["email"];
$pathTemporaire=$_FILES['photo']['tmp_name'];
move_uploaded_file($pathTemporaire,"./image/".$nomPhoto);
$ps->execute();

}
header("location:etudiant.php");

?>