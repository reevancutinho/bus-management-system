<!DOCTYPE html>
<html>
<head>
	<title>View All Bus Data</title>
<style>

table{
	border-collapse: collapse;
	width: 100%;
}
th,td{
	text-align: left;
	padding: 8px;
	text-align: center;
}
tr:nth-child(even){
	background-color: #f2f2f2;
}
th{
	background-color: #4caf50;
	color: white;
}

</style>
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT b.bus_no, bus_name,bus_desc,start,destination,price,no_of_seats,type,arrival_time,departure_time FROM bus b,bus_type a,time t,place p,ticket z,goes_to g where b.bus_no=a.bus_no and a.bus_no=t.bus_no and a.bus_no=b.bus_no and p.route_no=z.route_no and b.bus_no=g.bus_no and g.route_no=p.route_no";
$result = $conn->query($sql);

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}

if ($result->num_rows > 0) { 
    echo "<table ><tr><th>Bus No</th><th>Bus Name</th><th>Bus Description</th><th>Start</th><th>Destination</th><th>Price</th><th>No of seats</th><th>Type</th><th>Arrival Time</th><th>Departure Time</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["bus_no"]. "</td><td>" . $row["bus_name"]."</td><td>" . $row["bus_desc"]."</td><td>" . $row["start"]."</td><td>" . $row["destination"]."</td><td>" . $row["price"]."</td><td>" . $row["no_of_seats"]."</td><td>".$row["type"]."</td><td>".$row["arrival_time"]."</td><td>".$row["departure_time"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<table><tr><th>No buses found</th></tr></table>";
}

$conn->close();
?> 
<body>

</body>
</html>