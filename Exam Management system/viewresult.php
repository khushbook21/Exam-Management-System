<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Result</title>
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
		<h4><center>Select SEM To Display UT 1 Marks :</center></h4>
		</div>	
		<div class="w3-half"> 
		</div>
	</div>

	<div class="w3-row">
  <?php 
  if(isset($_GET['s'])){
    $conn = mysqli_connect("localhost", "root", "", "ut_db");

    echo '<table class="w3-table w3-striped w3-bordered "><tr><th>Name</th><th>Roll</th><th>Mark</th><th>SEM</th></tr>';

    if($_GET['s'] == 'sem1') {
      $sem = $_GET['s'];
      $sql="select * from result where sem='$sem' ";
      $select=mysqli_query($conn, $sql);
      $count=mysqli_num_rows($select);
      while($row=mysqli_fetch_array($select))
      {
      echo "<tr><td>".$row['name']."</td><td>".$row['roll']."</td><td>".$row['mark']."</td><td>".$row['sem']."</td></tr>";
      } 
    } elseif ($_GET['s'] == 'sem2') {
        $sem = $_GET['s'];
        $sql="select * from result where sem='$sem' ";
        $select=mysqli_query($conn, $sql);
        $count=mysqli_num_rows($select);
        while($row=mysqli_fetch_array($select))
        {
        echo "<tr><td>".$row['name']."</td><td>".$row['roll']."</td><td>".$row['mark']."</td><td>".$row['sem']."</td></tr>";
        }
      } elseif ($_GET['s'] == 'sem3') {
        $sem = $_GET['s'];
        $sql="select * from result where sem='$sem' ";
        $select=mysqli_query($conn, $sql);
        $count=mysqli_num_rows($select);
        while($row=mysqli_fetch_array($select))
        {
        echo "<tr><td>".$row['name']."</td><td>".$row['roll']."</td><td>".$row['mark']."</td><td>".$row['sem']."</td></tr>";
        }
      } elseif ($_GET['s'] == 'sem4') {
        $sem = $_GET['s'];
        $sql="select * from result where sem='$sem' ";
        $select=mysqli_query($conn, $sql);
        $count=mysqli_num_rows($select);
        while($row=mysqli_fetch_array($select))
        {
        echo "<tr><td>".$row['name']."</td><td>".$row['roll']."</td><td>".$row['mark']."</td><td>".$row['sem']."</td></tr>";
        }
      } elseif ($_GET['s'] == 'sem5') {
        $sem = $_GET['s'];
        $sql="select * from result where sem='$sem' ";
        $select=mysqli_query($conn, $sql);
        $count=mysqli_num_rows($select);
        while($row=mysqli_fetch_array($select))
        {
        echo "<tr><td>".$row['name']."</td><td>".$row['roll']."</td><td>".$row['mark']."</td><td>".$row['sem']."</td></tr>";
        }
      } elseif ($_GET['s'] == 'sem6') {
        $sem = $_GET['s'];
        $sql="select * from result where sem='$sem' ";
        $select=mysqli_query($conn, $sql);
        $count=mysqli_num_rows($select);
        while($row=mysqli_fetch_array($select))
        {
        echo "<tr><td>".$row['name']."</td><td>".$row['roll']."</td><td>".$row['mark']."</td><td>".$row['sem']."</td></tr>";
        }
      }
      echo "</table>";

  } else {
    echo ('<center>
    <div class="w3-container w3-quarter"> 
		<a class="w3-hover w3-btn w3-teal w3-black" href="?s=sem1">Sem 1</a>
		</div>

		<div class="w3-container w3-quarter"> 
		<a class="w3-hover w3-btn w3-teal w3-black" href="?s=sem2">Sem 2</a>
		</div>

		<div class="w3-container w3-quarter"> 
		<a class="w3-hover w3-btn w3-teal w3-black" href="?s=sem3">Sem 3</a>			
		</div>

		<div class="w3-container w3-quarter" href=""> 
		<a class="w3-hover w3-btn w3-teal w3-black" href="?s=sem4">Sem 4</a>			
		</div>

		<div class="w3-container w3-quarter"> 
		<a class="w3-hover w3-btn w3-teal w3-black" href="?s=sem5">Sem 5</a>	

    <div class="w3-container w3-quarter"> 
		<a class="w3-hover w3-btn w3-teal w3-black" href="?s=sem6">Sem 6</a>
		</div>		
		</div></center>');
  }
   ?>

    <center><a href ='result.php'><h4>Add New Results</h4></a></center>
	</div>	
	</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>