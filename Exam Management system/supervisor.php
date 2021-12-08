<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supervisor</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
        <a class="nav-link px-3 text-white" href="aboutus.php">ABOUT US</a>
      </li>
    
       </div>
      </nav>

  <form action="supervisorprocess.php" method="POST">
    <section>
    <div id="main" style="margin-left:0%">
    <div>

  	<center>
    <label for="date1">Date</label>
  	<input type="date" id="date1" name="date_time">
  	<br><br>

	  Staff Name:<select name="staffname" id="staff " value=""><br>
         <option value="0" selected>Select staff</option>
         <option>mukhtar Ansari</option>
         <option>Javed shaikh</option>
         <option>kalpana Bodke</option>
          <option>Reehal qureshi</option></select>
		</select>
    <br><br>
  	<label for="tf">From Time:</label> 
  	<select name="fromTime" id="tf" onchange="timeHandling()">
        <option value="8">8:00</option>
        <option value="9">9:00</option>
        <option value="10">10:00</option>
        <option value="11">11:00</option>
		<option value="12">12:00</option>
        <option value="14">14:00</option>
		<option value="15">15:00</option>
    </select><br><br>

    <label for="tt">Till Time:</label> 
    <select name="tillTime" id="tt">
    </select>
		<br><br>


        Block no.:<select name="Block" id="Block " value=""><br>
         <option value="0" selected>Block no</option>
         <option>101</option>
         <option>102</option>
         <option>103</option>
         <option>104</option></select>
		</select>
    <br><br>
	<input type="submit" name="btn" value="Submit">
  <center><a href ='viewsupervisor.php'><h4>View supervisors</h4></a></center>

</center>
</section>
</div>
</form>

    	<script type="text/javascript">
    	
    	$(document).ready(function(){
    		timeHandling();
    	});	

    	function timeHandling()
    	{
    		var fromTime = parseInt($("#tf").val());
    		var tillTime = ""; 
    		for (var i = fromTime + 1 ; i<=16	; i++) 
    		{
    			tillTime = tillTime + "<option value='"+ i + "'>"+i+":00</option>";
    		} 
    		$("#tt").html(tillTime);
    		//alert("");
    	}

    	</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
