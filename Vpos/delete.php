<?php
include "connect.php";
$query = "DELETE FROM $table_input WHERE id = '".$_POST["id"]."'";
if(mysqli_query($connect, $query))
{
    echo 'Data Deleted';
}

?>