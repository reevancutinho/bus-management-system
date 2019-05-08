<?php
session_start();
header('location:update_data.php');
$link = mysqli_connect("localhost", "root", "", "bus");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$bus_no = mysqli_real_escape_string($link, $_REQUEST['bus_no']);
$bus_name = mysqli_real_escape_string($link, $_REQUEST['bus_name']);
$bus_desc = mysqli_real_escape_string($link,$_REQUEST['bus_desc']);
$route_no = mysqli_real_escape_string($link,$_REQUEST['route_no']);
$no_of_seats = mysqli_real_escape_string($link,$_REQUEST['no_of_seats']);
$start = mysqli_real_escape_string($link, $_REQUEST['start']);
$destination = mysqli_real_escape_string($link, $_REQUEST['destination']);
$bus_type = mysqli_real_escape_string($link, $_REQUEST['type']);
$arrival=mysqli_real_escape_string($link, $_REQUEST['arrival_time']);
$departure=mysqli_real_escape_string($link, $_REQUEST['departure_time']);
$price=mysqli_real_escape_string($link, $_REQUEST['price']);
 
$sql = "UPDATE `bus` SET `bus_name`='$bus_name',bus_desc='$bus_desc' WHERE bus_no='$bus_no'";
if(mysqli_query($link, $sql)){
    echo "Records updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

$sql1 = "UPDATE `bus_type` SET `type`='$bus_type',no_of_seats='$no_of_seats' WHERE bus_no='$bus_no'";
if(mysqli_query($link, $sql1)){
    echo "Records updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
}

$sql2 = "UPDATE place SET start = '$start', destination= '$destination' WHERE route_no = '$route_no'";
if(mysqli_query($link, $sql2)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
}

$sql3 = "UPDATE `ticket` SET `price`='$price' WHERE route_no='$route_no'";
if(mysqli_query($link, $sql3)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql3. " . mysqli_error($link);
}

$sql4 = "UPDATE time SET arrival_time = '$arrival', departure_time= '$departure' WHERE bus_no = '$bus_no'";
if(mysqli_query($link, $sql4)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql4. " . mysqli_error($link);
}

$sql5 = "UPDATE goes_to SET route_no = '$route_no' WHERE bus_no = '$bus_no'";
if(mysqli_query($link, $sql5)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql4. " . mysqli_error($link);
}

mysqli_close($link);
?>
