<?php

include "../env/db.php";
$deleteId = $_REQUEST['deleteId'];

$dltQuery = "DELETE FROM test WHERE id = $deleteId";
$test = mysqli_query($conn, $dltQuery);

   if($test){
    header("Location:../index.php");    
   }

?>