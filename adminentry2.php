<?php
session_start();
header('location:add_data.html');
$link = mysqli_connect("localhost", "root", "", "bus");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$bus_no = mysqli_real_escape_string($link, $_REQUEST['bus_number']);
$bus_name = mysqli_real_escape_string($link, $_REQUEST['busname']);
$bus_desc = mysqli_real_escape_string($link,$_REQUEST['bus_desc']);
$route_no = mysqli_real_escape_string($link,$_REQUEST['route_no']);
$no_of_seats = mysqli_real_escape_string($link,$_REQUEST['no_of_seats']);
$start = mysqli_real_escape_string($link, $_REQUEST['start']);
$destination = mysqli_real_escape_string($link, $_REQUEST['destination']);
$bus_type = mysqli_real_escape_string($link, $_REQUEST['bus_type']);
$arrival=mysqli_real_escape_string($link, $_REQUEST['arrival']);
$departure=mysqli_real_escape_string($link, $_REQUEST['departure']);
$price=mysqli_real_escape_string($link, $_REQUEST['price']);
 
$sql = "INSERT INTO bus (bus_name,bus_no,bus_desc) VALUES ('$bus_name','$bus_no','$bus_desc')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

$sql1 = "INSERT INTO place (start,destination,route_no) VALUES ('$start','$destination','$route_no')";
if(mysqli_query($link, $sql1)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
}

$sql2 = "INSERT INTO bus_type (bus_no,type,no_of_seats) VALUES ('$bus_no','$bus_type','$no_of_seats')";
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

$sql4 = "INSERT INTO ticket (price,route_no) VALUES ('$price','$route_no')";
if(mysqli_query($link, $sql4)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql4. " . mysqli_error($link);
}

$sql5 = "INSERT INTO goes_to (bus_no,route_no) VALUES ('$bus_no','$route_no')";
if(mysqli_query($link, $sql5)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql4. " . mysqli_error($link);
}

mysqli_close($link);
?>