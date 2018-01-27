<?php
require_once ('conn.php');
require_once 'header.php';
require_once 'rolescolarite.php';
$code=$_GET["id"];

$req="select * from etudiants where code=$code";
$res= mysqli_query($link, $req);
 $row=mysqli_fetch_array($res);

 ?>
 <body>
 <div class='container'>
 <div class='col-md-8'></div>
 <div class='col-lg-4'>
 <div class="jumbotron" style='margin-top: 50px'>
 <h4 class='bg-danger'>SVP Connecter vous!!</h4><br>
 <form  method='post' action='update.php' enctype="multipart/form-data">
 <div class="from-group">
 <label class="from-label"> Code</label>
 <input type="text" name='code' class='form-control' value="<?php  echo $row["CODE"]  ?>">
 <span class='error'></span>
 </div>
 <div class="from-group">
 <input type="text" name='nom' class='form-control' value="<?php  echo $row["Nom"]  ?>">
 <span class='error'></span>
 </div>
 <br>
 <div class="from-group">
 <input type="text" name='email' class='form-control' value="<?php echo $row["Email"]?>">
 <span class='error'></span>
 </div>
 
 <div class="from-group">
 <input type="file" name='photo' class='form-control' >
 <img alt="" src="./image/<?php  echo $row["photo"] ?>" width="100" height="100">
 
 <span class='error'></span>
 </div>
 <button type='submit'class='btn btn-primary form-control'>Update</button>
 </form>
 </div>
 
 </div>
 <div class='col-lg-4'></div>
 </div>
 
 
 </body> 


