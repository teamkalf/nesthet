<?php
    
    session_start();
    

    if (isset($_POST['btnLogin']))
    {
        $user = $_POST['user'];
        $password = $_POST['password'];

        //sql injection security
        $user = mysqli_real_escape_string($con,$user);
        $password = mysqli_real_escape_string($con,$password);

        //select database

        $db = mysqli_select_db($con,'nesthet');

        $query = "SELECT * from users where user='$user' AND password='$password'";
        $query_run = mysqli_query($con,$query);
        $role = mysqli_fetch_array($query_run);
            
        //user redirection base on user role

        if($role['role'] == "admin"){
           
            $_SESSION['user'] = $user;
            header('location: admin.php');
        }
        else if($role['role'] == "user") {

            $_SESSION['user'] = $user;
            header('location: mdi_parent.php');
        }
        else {
            $_SESSION['status'] = "Username or password is invalid";
            header('location: index.php');
        }
    }
?>