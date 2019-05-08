<!DOCTYPE html>
<html>
<head>
  <title>Search Buses</title>
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
	width: 380px;
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
</style>
</head>


<body>

<form action="search_data_bus.php" method="POST">
	<div class="bus_data">
      <h1>Enter data</h1>
          <div class="textbox">
    Enter the start:<input type="text" name="start"><br/>
    Enter the destination:<input type="text" name="destination"><br/><br/>
    <input type="submit" name="submit" value="Submit">
</div>
</div>
  </form>

</body>
</html>
