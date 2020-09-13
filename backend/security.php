<?php

    session_start();

    if(!$_SESSION['user'])
    {
        header ('location:user_login.php');
    }

?>