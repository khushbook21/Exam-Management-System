<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Supervisors</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
body {
  background-color: #d6b55f;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style> 
</style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">UT MANAGEMENT SYSTEM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="home.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-3 text-white" href="timetable.php">TIME TABLE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-3 text-white" href="supervisor.php">SUPERVISOR</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link px-3 text-white" href="blockassigning.php">BLOCK ASSIGNING</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link px-3 text-white" href="result.php">RESULT</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link px-3 text-white" href="logout.php">LOGOUT</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link px-3 text-white" href="about.php">ABOUT US</a>
      </li>
       </div>
      </nav>

<section>
<div id="main" style="margin-left:0%">
    <div class="w3-container">	   
		<div class="w3-half w3-text-black ">	   
		<h4><center>Supervisors :</center></h4>
		</div>	
		<div class="w3-half"> 
		</div>
	</div>

	<div class="w3-row">
  <table class="w3-table w3-striped w3-bordered ">
  <tr><th>Date</th><th>Staff</th><th>From</th><th>Till</th><th>Block</th></tr>

  <?php 
    $conn = mysqli_connect("localhost", "root", "", "ut_db");
    $sql="select * from supervisor";
    $select=mysqli_query($conn, $sql);
    $count=mysqli_num_rows($select);
    while($row=mysqli_fetch_array($select))
    {
    echo "<tr><td>".$row['date_time']."</td><td>".$row['staffname']."</td><td>".$row['fromTime']."</td><td>".$row['tilltime']."</td><td>".$row['Block']."</td></tr>";
    }
  ?>
  </table>

    <center><a href ='supervisor.php'><h4>Add New supervisors</h4></a></center>
	</div>	
	</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>