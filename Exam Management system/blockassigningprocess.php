<?php

require 'navbar.php';

$conn = mysqli_connect("localhost", "root", "", "ut_db");

$check = mysqli_query($conn, "SELECT class FROM blockassign");
        if(empty($check)) {
            $sql = "CREATE TABLE blockassign (
				block VARCHAR(30),
				seat VARCHAR(30),
				class VARCHAR(30)
				)";
			mysqli_query($conn, $sql);
        }

$block=$_POST['block'];
$seat=$_POST['seat'];
$class=$_POST['class'];
$qury="INSERT INTO blockassign (block,seat,class) values ('".$block."','".$seat."','".$class."')";
if(mysqli_query($conn, $qury))
{
	echo "<center>";
	echo "Block Successfully Assignmed.<br>";
	echo nl2br("Block: $block\n Seat: $seat\n "
                . "Class :$class"
			);

	echo "<center><br><a href ='viewblockassigning.php'><b>View Assigned Blocks</b> </a></center>";
	echo "</center>";
} else {
	die ("Error: ".mysqli_error($conn));
}

?>