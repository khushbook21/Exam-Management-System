        <?php
        require 'navbar.php';
        $conn = mysqli_connect("localhost", "root", "", "ut_db");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }

        $check = mysqli_query($conn, "SELECT date_time FROM supervisor");
        if(empty($check)) {
            include_once 'db.php';
        }
          
        // Taking all 5 values from the form data(input)
         $date_time = $_POST['date_time'];
         $staffname = $_POST['staffname'];
         $fromTime = $_POST['fromTime'];
         $tillTime = $_POST['tillTime'];
         $Block = $_POST['Block'];
         $sql = "INSERT INTO supervisor VALUES ('$date_time','$staffname','$fromTime','$tillTime','$Block')";
          
        if(mysqli_query($conn, $sql)){
            echo "<center>";
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\nDate :$date_time\n Staff Name: $staffname\n "
                . "From :$fromTime\n Till: $tillTime\n Block: $Block");

            echo"<center><br><a href ='viewsupervisor.php'><b>view Supervisors</b> </a></center>";
            
            echo "</center>";
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>