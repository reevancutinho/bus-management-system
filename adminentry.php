<?php

session_start();
header('location:type1_bus_data.html');
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "bus");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$bus_no = mysqli_real_escape_string($link, $_REQUEST['bus_number']);
$bus_name = mysqli_real_escape_string($link, $_REQUEST['busname']);
$route_no = mysqli_real_escape_string($link,$_REQUEST['route_number']);
$start = mysqli_real_escape_string($link, $_REQUEST['start']);
$destination = mysqli_real_escape_string($link, $_REQUEST['destination']);
$bus_type = mysqli_real_escape_string($link, $_REQUEST['bus_type']);
$arrival=mysqli_real_escape_string($link, $_REQUEST['arrival']);
$departure=mysqli_real_escape_string($link, $_REQUEST['departure']);
 
// Attempt insert query execution
$sql = "INSERT INTO bus (bus_name,bus_no) VALUES ('$bus_name','$bus_no')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

$sql1 = "INSERT INTO place (start,destination,bus_no,route_no) VALUES ('$start','$destination','$bus_no','$route_no')";
if(mysqli_query($link, $sql1)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
}

$sql2 = "INSERT INTO bus_type (bus_no,type) VALUES ('$bus_no','$bus_type')";
if(mysqli_query($link, $sql2)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
}

$sql3 = "INSERT INTO time (bus_no,arrival_time,departure_time) VALUES ('$bus_no','$arrival','$departure')";
if(mysqli_query($link, $sql3)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql3. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>