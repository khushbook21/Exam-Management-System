
<?php

session_start();
    
?>

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

<?php require 'navbar.php' ?>
<br><br><br><br><br>
<link rel="stylesheet" href="css/project.min.css">
<form action="" method="post">
<div class="w3-container w3-center w3-card-8"> 
<table class="w3-table w3-striped w3-bordered ">
<tr><th>Date</th><th>SubName</th><th>Session</th><th>STime</th><th>TTime</th><th>Scheme</th></tr> 
    <?php
        if(isset($_POST['scheme']))
        {
        $SCHEME=($_POST['scheme']);
        $sql="select * from timetable where  Scheme='$SCHEME' ";
        }
        else
        {
        $sql="select * from timetable";
        }

        $conn = mysqli_connect("localhost", "root", "", "ut_db");
        $select=mysqli_query($conn, $sql);
        $count=mysqli_num_rows($select);
        while($row=mysqli_fetch_array($select))
        {
        echo "<tr><td>".$row['date']."</td><td>".$row['subname']."</td><td>".$row['session']."</td><td>".$row['stime']."</td><td>".$row['ttime']."</td><td>".$row['scheme']."</td></tr>";
        }


?>
</table>
</div>
<center><a href="timetable.php"><h3>Enter Data</h3></a></center>
<!-- <center><a href ='time.php'><h3>Search timetable</h3></a></center> -->
<?php
