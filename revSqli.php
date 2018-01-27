<?php
$link= new mysqli("localhost","root","");
mysqli_select_db($link, "scolarite");
if(isset($_POST["search"])){
    $req="select * from etudiants where Nom='$_POST[nom]'";
    $res= mysqli_query($link, $req);
    echo '<table border="1">';
    
    while($row=mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td>{$row['CODE']}</td>";
        echo "<td>{$row['Nom']}</td>";
        echo "<td>{$row['Email']}</td>";
        echo "<td>{$row["photo"]}</td>";
        
    }
    
    echo '</table>';
    
}
if(isset($_POST["update"])){
    $req="update etudiants set Nom='$_POST[email]' where Nom='$_POST[nom]'";
    mysqli_query($link, $req);
    
}
?>

<html>
<form action="#" method="post">
<table>
<tr>
<td><input type="text" name="nom" placeholder="nom"><td>
<tr>
<tr>
<td><input type="text" name="email" placeholder="Email"><td>
<tr>
<tr>
<td><input type="text" name="photo" placeholder="picture"><td>
<tr>
<tr>
<td><input type="submit" name="insert" value="Insert in DB"><td>
<td><input type="submit" name="delete" value="delete"><td>
<tr>
<tr>
<td><input type="submit" name="update" value="Update in DB"><td>
<td><input type="submit" name="select" value="Select"><td>
<td><input type="submit" name="search" value="search By Name"><td>
<tr>

</table>

</form>
<table>


</table>


</html>

<?php 

if(isset($_POST["insert"])){
    $req="INSERT INTO `etudiants` (`CODE`, `Nom`, `Email`, `photo`) VALUES (NULL,'". $_POST['nom']."','". $_POST['email']."','".$_POST['photo']."') ";
mysqli_query($link, $req);

}
if(isset($_POST["delete"])){
    $req="delete from etudiants where Nom='$_POST[nom]' ";
    mysqli_query($link, $req);
    
}

if(isset($_POST["select"])){
    $req="select * from etudiants ";
     $res= mysqli_query($link, $req);
   echo '<table border="1">';
     
   while($row=mysqli_fetch_array($res)){
       echo "<tr>"; 
       echo "<td>{$row['CODE']}</td>";
       echo "<td>{$row['Nom']}</td>";
       echo "<td>{$row['Email']}</td>";
       echo "<td>{$row["photo"]}</td>";
       
   }
   
   echo '</table>';
    
}
if(isset($_POST["update"])){
    $req="update etudiants set Nom='$_POST[email]' where Nom='$_POST[nom]'";
    mysqli_query($link, $req);
    
}


?>

