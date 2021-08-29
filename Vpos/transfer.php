<?php
include "connect.php";
if(isset($_POST["id"]))
{
 $query = "INSERT INTO $table_master SELECT * FROM $table_input;
 DELETE from $table_input";
 if(mysqli_multi_query($connect, $query))
 {
  echo 'Data Transfered';
 }
 
}
?>