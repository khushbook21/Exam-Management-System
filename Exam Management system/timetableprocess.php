<?php

	session_start();
		
?>

<?php require 'navbar.php'; ?>
<body bgcolor="#d6b55f">
<br><br><br><br>
<center>

<?php 
$conn = mysqli_connect("localhost", "root", "", "ut_db");

$check = mysqli_query($conn, "SELECT date FROM timetable");
        if(empty($check)) {
            $sql = "CREATE TABLE timetable (
				date VARCHAR(30),
				subname VARCHAR(30),
				session VARCHAR(30),
				stime VARCHAR(50),
				ttime VARCHAR(30),
				scheme VARCHAR(30)
				)";
			mysqli_query($conn, $sql);
        }

$d=$_POST['date'];
$s=$_POST['subname'];
$teach=$_POST['session'];
$a=$_POST['tf'];
$b=$_POST['tt'];
$scheme=$_POST['scheme'];
$qury="INSERT INTO timetable (date,subname,session,stime,ttime,scheme) values ('".$d."','".$s."','".$teach."','".$a."','".$b."','".$scheme."')";
if(mysqli_query($conn, $qury))
{
	echo "<center>";
	echo "Time Table Saved Successfully.<br>";
	echo nl2br("\nDate: $d\n Subname: $s\n "
                . "Session :$teach\n STime: $a\n TTime: $b\n"
				. "Scheme: $scheme"
			);
	echo "</center>";
	echo"<center><br><a href ='timetableprocess1.php'><b>view timetable</b> </a></center>";

} else {
	die ("Error: ".mysqli_error($conn));
}
?>
</center>