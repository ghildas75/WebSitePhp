<?php 
require_once 'security.php';
require_once 'header.php';
require_once 'rolescolarite.php';
?>

<body>
    <div class='container space'>
    <div class="panel-info">Add a</div>
        <div class='col-md-8'></div>
         <div class='col-lg-4'>
               <div class="jumbotron" style='margin-top: 50px'>
					<h4 class='bg-danger'>SVP Connecter vous!!</h4><br>
                <form  method='post' action='save.php' enctype="multipart/form-data">
                     <div class="from-group">
                       <input type="text" name='nom' class='form-control' placeholder='Nom'>
                       <span class='error'></span>
                        </div>
					<br>
                    <div class="from-group">
                       <input type="text" name='email' class='form-control' placeholder='email'>
                          <span class='error'></span>
                      </div>
                    
                     <div class="from-group">
                       <input type="file" name='photo' class='form-control'>
                       
                          <span class='error'></span>
                      </div>
                    <button type='submit'class='btn btn-primary form-control'>save</button>
                </form>
                </div>
                
         </div>
          <div class='col-lg-4'></div>
    </div>
				
				
   </body> 