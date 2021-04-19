<?php
    $servername= "localhost";
    $username = "root";
    $password = "";
    $dbname = "iiserb";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
        die ("Database connection error.");
    $email = $_REQUEST['email'];
    //echo $email."<br/>";
    $query = "SELECT email FROM login WHERE email = '$email'";
    //echo $query."<br/>";
    $data = mysqli_query($conn,$query);
    if($data)
    {
        $password = $_REQUEST['password'];
        if($password<6)
        {
            echo '<script language="javascript">';
            echo 'alert ("Password must be at least 6 characters long.")';
            echo '</script>';
        }
        $query_again = "SELECT password FROM login WHERE password = '$password'";
    }  
    /*else if(!$data)
    {
            echo '<script language="javascript">';
            echo 'alert ("Please input a valid Email.")';
            echo '</script>';
            echo $_SERVER['HTTP_REFERER'];
    }
    //echo $query_again."<br/>";
    $data_again = mysqli_query($conn,$query_again);
    if(!data_again)
    {
        echo '<script language="javascript">';
        echo 'alert ("Please check email and password and try again.")';
        echo '</script>';
        echo $_SERVER['HTTP_REFERER'];
    }
    else if(!data_again)
        die ("Please check the password and try again.");*/
?>