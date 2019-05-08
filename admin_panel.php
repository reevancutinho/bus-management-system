<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<style>
		body{
			margin: 0px;
			border: 0px;
		}
		#header{
			width:100%;
			height: 120px;
			background:#34495e;
			color: white;
		}
		#sidebar{
			width: 300px;
			height: 400px;
			background:#34495e;
			color: white;
			float: left;
		}
		#data{
			height: 700px;
			font-family: sans-serif;
	        background: #2c3e50;
			color: white;
			font-family: Helvetica;
			font-size: 25px;
		}
		#adminLogo{
			background:white;
			border-radius: 50px;
		}
		ul li{
			padding:20px;
			border-bottom: 2px solid grey;
		}
		ul li:hover{
           background:black;
           color: white;
		}
		li a{
			color: white;
		}
	</style>
</head>
<body>
  <div id="header">
  	 <center><img src="admin.png" alt = "adminLogo" id="adminLogo">
  	 	<br><br>This is Admin Panel
  	 </center>
  </div>
  <div id="sidebar">
  	<ul>
  		<li><a href="add_data.html"> Add Data </a></li>
  		<li><a href="delete_data.php"> Delete Data </a></li>
  		<li><a href="update_data.php"> Update Data </a></li>
  		<li><a href="search_data.php"> Search Data </a></li>
  		<li><a href="view.php"> View All Data </a></li>
  		<li><a href="logout.php"> Logout </a></li>
  	</ul>
  </div>
  <div id="data"><br>
  	 <center><h3>Hello!</h3>
  	 <p>Welcome to admin panel</p>
  	 </center>
  </div>
</body>
</html>