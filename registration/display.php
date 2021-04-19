<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="iiserb";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
        die ("Database connection error.");
    $roll=$_REQUEST["roll"];
    //echo $roll;
    $query="SELECT * FROM sreg WHERE roll = '$roll'";
    $data=mysqli_query($conn,$query);
    if(!$query)
        die ("Error query.");
    $result=mysqli_fetch_assoc($data);
    echo $result['name']." ";
    echo $result['roll']." ";
    echo $result['dob']." ";
    echo $result['gen']." ";
    echo $result['mob']." ";
    echo $result['email']." ";
    echo $result['addr']." ";
    echo $result['pin']." ";
    echo $result['fname']." ";
    echo $result['fmob']." ";
    echo $result['femail']." ";
    echo $result['focc']." ";
    echo $result['finc']." ";
    echo $result['mname']." ";
    echo $result['mmob']." ";
    echo $result['memail']." ";
    echo $result['mocc']." ";
    echo $result['minc'];    
?>