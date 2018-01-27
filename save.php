<?php 
require_once 'security.php';
require_once 'header.php';
require_once 'conn.php';
require_once 'rolescolarite.php';
$ps =$link->prepare("INSERT INTO etudiants (Nom,Email,photo) VALUES (?, ?, ?)");
$ps->bind_param("sss",$nom, $email, $nomPhoto);
$nom=$_POST["nom"];
$email=$_POST["email"];
$nomPhoto=$_FILES['photo']['name'];
$pathTemporaire=$_FILES['photo']['tmp_name'];

//$parm=array($nom,$email,$nomPhoto);
//var_dump($photo);
//echo "$nomPhoto";
move_uploaded_file($pathTemporaire,"./image/".$nomPhoto);
$ps->execute();
header("location:etudiant.php");

?>