<?php
    $servername= "localhost";
    $username = "root";
    $password = "";
    $dbname = "iiserb";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
        die ("Database connection error.");
    $roll = $_REQUEST["roll"];
    //echo $roll;
    $column_to_update = $_REQUEST["update"];
    //echo $column_to_update;
    $updated_value = $_REQUEST["updated_value"];
    //echo $updated_value;
    $query = "UPDATE sreg SET $column_to_update = '$updated_value' WHERE roll = '$roll'";
    $data = mysqli_query($conn,$query);
    if(!$data)
        die ("Record updation failed. Please try again.");
    echo "Record updated successfully!";
?>