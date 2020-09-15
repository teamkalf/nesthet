<?php
    
    //direct URL access prevention

    if(!isset($_SESSION['user']))
        header ('location:user_login.php');
    

?>