<?php
    $servername= "localhost";
    $username = "root";
    $password = "";
    $dbname = "iiserb";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
        die ("Database connection error.");
    $em = $_REQUEST['email'];
    $pw = $_REQUEST['password'];
    $query = "SELECT email,password FROM login WHERE email = '$em'";
    $data = mysqli_query($conn,$query);
    $result = mysqli_fetch_row($data);
    $email = $result[0];
    $password = $result[1];
    if(strlen($pw)<6)
    {
       echo "<script type='text/javascript'>alert('Password must be minimum 6 characters long.');window.location='staff_login.php';</script>";
    }
    else 
    {
        if($em==$email && $pw==$password)
        {
            echo "<script type='text/javascript'>alert('Login successfull!');window.location='upd_del_disp.php';</script>";
        } 
        else
        {
            echo "<script type='text/javascript'>alert('Check email and password and try again.');window.location='staff_login.php';</script>";
        }        
    }
?>