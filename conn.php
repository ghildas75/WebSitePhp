<?php 
/* mysql_connect("localhost","root","") or die(mysql_error);
mysql_select_db("scolorite") or die (mysql_error);
 */

$servername="localhost";
$username="root";
$password="";
$dbname="indigo";
$link= new mysqli($servername,$username,$password,$dbname);

if ($link->connect_error){
    die ("connection error".$link->connect_error);
}
echo' connection reussi';




?>