<?php
    $servername= "localhost";
    $username = "root";
    $password = "";
    $dbname= "iiserb";
    $conn= mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
        die ("Database connection error.");
    $roll = $_REQUEST["roll"];
    //echo $roll;
    $query = "DELETE FROM sreg WHERE roll= '$roll'";
    $data = mysqli_query($conn,$query);
    if(!$data)
        die ("Record deletion failed. Please try again.");
    echo "Record deleted successfully!";
?>