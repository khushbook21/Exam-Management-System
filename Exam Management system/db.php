<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "ut_db";
      $link = mysqli_connect("localhost", "root", "", "ut_db");
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }

      $sql = "CREATE TABLE supervisor (
      date_time VARCHAR(30),
      staffname VARCHAR(30),
      tilltime VARCHAR(30),
      fromTime VARCHAR(50),
      Block VARCHAR(30)
      )";

      if(mysqli_query($link, $sql)){
          echo "Table created successfully.";
      } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
?>