<?php

require 'navbar.php';

$conn = mysqli_connect("localhost", "root", "", "ut_db");

$check = mysqli_query($conn, "SELECT class FROM result");
        if(empty($check)) {
            $sql = "CREATE TABLE result (
				name VARCHAR(30),
				roll VARCHAR(30),
				mark VARCHAR(30),
				sem VARCHAR(30)
				)";
			mysqli_query($conn, $sql);
        }

$name=$_POST['name'];
$roll=$_POST['roll'];
$mark=$_POST['mark'];
$sem=$_POST['sem'];
$qury="INSERT INTO result (name,roll,mark,sem) values ('".$name."','".$roll."','".$mark."','".$sem."')";
if(mysqli_query($conn, $qury))
{
	echo "<center>";
	echo "Result successfully added.<br>";
	echo nl2br("Name: $name\n Roll: $roll\n "
                . "Mark :$mark\n SEM: $sem"
			);

	echo "<center><br><a href ='viewresult.php'><b>View Results</b> </a></center>";
	echo "</center>";
} else {
	die ("Error: ".mysqli_error($conn));
}

?>