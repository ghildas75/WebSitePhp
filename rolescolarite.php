<?php
if(!($_SESSION['profile']['ROLE']=="SCOLARITE")){
    header("location: $_SERVER[HTTP_REFERER]") ;
    
}