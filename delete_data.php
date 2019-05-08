<!DOCTYPE html>
<html>
<head>
	<title>Delete Data</title>
<style>
	table, th, td {
    border: 1px solid white;
    color: white;
}
body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(car.jpg);
	background-size: cover;
}

.bus_data{
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: white;
}

.bus_data h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #ffffff;
  margin-bottom: 10px;
  padding: 13px 0;
}

.textbox{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom:1px solid #ffffff; 
}
li a{
  color: white;
  border:1px;
}
</style>	
<?php
 include 'connection1.php';
 if(isset($_POST['bus_no'])){
 $bus_no = $_POST['bus_no'];
 $sql="delete from bus where bus_no='$bus_no'";
 $sql1="delete from place where route_no='$bus_no'";

 if($_POST['submit']){
 	if( mysqli_query($conn,$sql)){
    if( mysqli_query($conn,$sql1)){
 		echo "<table><tr><th>Data deleted successfully</th></tr></table>";
 	}
 }
 	else{
 		echo "Something went wrong";
 	}
 }
 }
?>


</head>
<body>
  <form action="delete_data.php" method="POST">
  	<div class="bus_data">
          	<div class="row">
        <div class=">
            <img src="bus2.png">
            </div>
        </div>
         <h1>Enter data</h1>
         <div class="textbox">
    Enter the bus number that you want to delete:<input type="text" name="bus_no">
    <input type="submit" name="submit" value="submit">
</div>
<ul class="main_nav">
                <li class="active"><a href="admin_panel.php">Back</a></li>
            </ul>
</div>
  </form>
</body>
</html>