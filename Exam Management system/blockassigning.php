<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Block assigning</title>
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

  <section>  
<center>
<table width="100%"><tr><td><h5 align="center">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</h5></td><td align="right" valign="bottom"><a href="logout.php" Style="color:blue;">
</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr></table>
</center>
<form action="blockassigningprocess.php" method="POST">
<h3><center>BLOCK ASSIGNING:-</center></h3>
<h6><center>Enter Available Class</h3></center>
<center><input type="text" name ="block" id="blockid" value ="" /></center>
<h6><center>Enter Available Seat Per Class</h6></center>
<center><input type="text" name ="seat" id="blockid" value ="" /></center><br>
</td>
</tr>
<center>SELECT CLASS:
<select name= "class" id="class" onchange="showUser(this.value)">
<option value="0" selected>Select class</option>
         <option>SE</option>
         <option>TE</option>
          <option>BE</option></select>
		</select>
        <br><br>
<center><input type="submit"value="SUBMIT" />
 <input type="reset" name="CANCEL" value="CANCEL" /></center>
 </form>
 <center><a href ='viewblockassigning.php'><h4>View assigned blocks</h4></a></center>
  </div>
  </div>
  </div>

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>