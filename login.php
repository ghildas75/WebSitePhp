<?php
require_once 'header.php';
?>
<body>
<div class='container'>
<div class='col-md-8'></div>
<div class='col-lg-4'>
<div class="jumbotron" style='margin-top: 50px'>
<h4 class='bg-danger'>SVP Connecter vous!!</h4><br>
<form  method='post' action='validlogin.php' >
<div class="from-group">
<input type="text" name='username' class='form-control' placeholder='username'>
<span class='error'></span>
</div>
<br>
<div class="from-group">
<input type="password" name='password' class='form-control'>
<span class='error'></span>
</div>
<button type='submit' name="submit" class='btn btn-primary form-control'>login</button>
</form>
</div>

</div>
<div class='col-lg-4'></div>
</div>


