<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <style>
body {
  background-color: #d6b55f;
}
</style>

</head>
<body>
<form name="timetable" action="timetableprocess.php" method="POST">
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
        <a class="nav-link px-3 text-white" href="aboutus.php">ABOUT US</a>
      </li>
    
       </div>
      </nav>

<section>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<center>
<table width="120%"><tr><td><h5 align="center">
	
</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr></table>
</center>
<h3><center>TIME TABLE</center></h3> 
<center>Date:
<input type="date" name="date" value="" required/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
STime: <select name="tf">
        <option value="08:00:00">8:00 AM</option>
        <option value="09:00:00">9:00 AM</option>
        <option value="10:00:00">10:00 AM</option>
        <option value="11:00:00">11:00 AM</option>
		<option value="12:00:00">12:00 PM</option>
        <option value="02:00:00">02:00 PM</option>
		<option value="03:00:00">03:00 PM</option>
    </select>&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TTime: <select name="tt">
        <option value="09:00:00">9:00 AM</option>
        <option value="10:00:00">10:00 AM</option>
        <option value="11:00:00">11:00 AM</option>
		<option value="12:00:00">12:00 PM</option>
		<option value="01:00:00">01:00 PM</option>
		<option value="03:00:00">03:00 PM</option>
		<option value="04:00:00">04:00 PM</option>
		</select>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		SubName:
<select name ="subname" id="subname" value =""><br>
<option value="0" selected>Select</option>
<option>ML</option>
<option>DWM</option>
<option>SPCC</option>
<option>CSS</option>
<option>SE</option></select>

<br></br></center></center>
<center>Scheme:
<select name ="scheme" id="scheme" value =""><br>
<option value="0" selected>Select</option>
<option>SEM3</option>
<option>SEM4</option>
<option>SEM5</option>
<option>SEM6</option></select>
<br></br>
<center>Session:
<select name= "session" id="Session"></center><br>
<option value="0" selected>Select</option>
<option>MORNING</option>
<option>AFTERNOON</option>
</select>
<br></br>
<center><input type="SUBMIT" name="submit" value="SUBMIT" />
 <input type="reset"value="CANCEL" />
 </center>
 <center><a href ='timetableprocess1.php'><h4>View timetable</h4></a></center>
 </section>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>