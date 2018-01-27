<?php
require_once 'security.php';
require_once 'header.php';
require_once 'conn.php';
require_once 'rolescolarite.php';
$code= $_GET["id"];
echo  $code;
//DELETE FROM `etudiants` WHERE `etudiants`.`CODE` = 11 
$ps =$link->prepare("DELETE FROM `etudiants` WHERE `etudiants`.`CODE` =?");
var_dump($ps);
$ps->bind_param("i",$code);
$code= $_GET["id"];

$ps->execute();
header("location:etudiant.php");