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
		<h4><center>Add New Result :</center></h4>
		</div>	
		<div class="w3-half"> 
		</div>
	</div>

	<div class="w3-row">
		<center>
		<form action="resultprocess.php" method="POST">
        <h6><center>Enter Student's Name</center></h6>
        <center><input type="text" name ="name" id="blockid" value ="" /></center>
        <h6><center>Enter Student's Roll No.</center></h6>
        <center><input type="text" name ="roll" id="blockid" value ="" /></center><br>
        <h6><center>Enter Student's Marks</center></h6>
        <center><input type="text" name ="mark" id="blockid" value ="" /></center>
            <select name= "sem" id="class">
                <option value="0" selected>Select SEM</option>
                <option value="sem1">SEM 1</option>
                <option value="sem2">SEM 2</option>
                <option value="sem3">SEM 3</option>
                <option value="sem4">SEM 4</option>
                <option value="sem5">SEM 5</option>
                <option value="sem6">SEM 6</option>
            </select><br>
        <center><input type="submit"value="SUBMIT" /></center>
        </form>
        <center><a href ='viewresult.php'><h4>View Results</h4></a></center>
		</div>
        </center>
	</div>	
	</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>