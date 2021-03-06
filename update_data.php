<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bus Forms</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="http://localhost/management/bootstrap/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<script src="http://localhost/management/bootstrap/bootstrap.min.js"></script>
<style>
body{
    font-family: Courgette;
}
.submit{
  background-color: purple;
  color:white;
  text-size:24px;
  padding: 6px;
  border-radius: 5px;
  border:1px solid white;
  font-size: 24px;
}
.submit:hover{
  background-color: white;
  color: purple;
  box-shadow: 0px 0px 20px white;
}
h1{
	font-size: 14px;
}

td,th{
  padding: 4px;
  text-align: center;
}
</style>
</head>

<body>
	<div class="container-fliud">
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
      <a class="navbar-brand" href="http://localhost/front end/">Home</a>
    </div>
     <div class="collapse navbar-collapse" id="nav">
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/busproject/update_data.php">Update Bus Data</a></li>
      <li><a href="http://localhost/busproject/admin_panel.php">Admin panel </a></li>
    </ul>
  </div>
</div>
</nav>
      </div>
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-lg-4">

<form method ="post"   action="updatebusdata.php">
	 <h1>Bus Number</h1>
   <input type="number" name="bus_no"  class="form-control" placeholder="Bus No" value="">
  <div>
    <h1>Bus Name</h1>
  <input type="text" name="bus_name" class="form-control" placeholder="Enter Bus Name" value="">
</div>
<div>
    <h1>Bus Description</h1>
  <input type="text" name="bus_desc" class="form-control" placeholder="Enter Bus Description" value="">
</div>
<h1>Route Number</h1>
   <input type="number" name="route_no"  class="form-control" placeholder="Route No" value="">
<div class="col-xs-6">
  <h1>Enter start</h1>
  <input type="text" name="start" class="form-control" placeholder="Enter Start" value="">
</div>
<div class="col-xs-6">
<h1>Enter destination</h1>
  <input type="text" name="destination" class="form-control" placeholder="Enter destination" value=""><br/>
</div>
  <h1>Price</h1>
  <input type="text"  class="form-control" name="price"  placeholder="Enter price in rupees" value="">
  <div>
    <h1>Enter type</h1>
  <select name="type" class="form-control">
     <option value="Local">Local</option>
     <option value="Express">Express</option>
     <option value="Tourist">Tourist</option>
  </select>
</div>
<h1>Number of seats</h1>
  <input type="number"  class="form-control" name="no_of_seats"  placeholder="Enter no of seats" value="">
<div class="col-xs-6">
  <h1>arrival time</h1>
<input type="time" name="arrival_time" class="form-control" placeholder="arrival_time" value="">
</div>
<div class="col-xs-6">
  <h1>departure time</h1>
<input type="time" name="departure_time" class="form-control" placeholder="departure_time" value="">
</div>
		<div class="form-group row">
		<hr/><br/><br/><br/>
			<div class="col-xs-4">
					<input type="submit" class="btn btn-warning btn-block btn-lg" name="update" value="update">
				</div>
</div>
</form>
</div>
</div>
</body>
</html>