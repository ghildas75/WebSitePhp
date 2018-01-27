<?php
require_once 'security.php';
require_once ('conn.php');
require_once 'header.php';
//var_dump($res);



?>


<html>
<head>
<title> Eutdiant php</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-12">
<form method="get" action="etudiant.php">
<div class="form-group">
<label class="control-label"> mot cle</label>
<input type="text" name="motCle" class="control-form">
<input type="submit" value="Rechercher">

</div>

</form>

</div>
<div class='table table-stripped'>
<table class='table'>
<thead>
<tr>
<th>Code</th> <th>Name</th><th>Email</th><th>photo</th>
</tr>
</thead>
<tbody>

<?php   
$motCle="";

/* if (isset($_GET['motCle'])){
    $motCle=$_GET['motCle'];
    $req="SELECT * FROM etudiants WHERE Nom like '%$motCle%'";
 
  
} */

$req="select * from etudiants ";
//$res= mysqli_query($link, $req);

$res= mysqli_query($link, $req);
//$row=mysqli_fetch_array($res);
  while($row=mysqli_fetch_array($res)){
       echo "<tr>"; 
       echo "<td>{$row['CODE']}</td>";
       echo "<td>{$row['Nom']}</td>";
       echo "<td>{$row['Email']}</td>";
       echo "<td><img src='./image/{$row["photo"]}'\></td>";
       echo "<td> <a href='editer.php?id={$row['CODE']}'>Editer</a></td>";
       echo "<td> <a href='supp.php?id={$row['CODE']}'>Supprimer</a></td>";
       echo"<tr>";
   }
       ?>

   </tbody>
</table>

</div>
</body>
</html>
