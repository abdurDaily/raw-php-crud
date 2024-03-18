<?php

include "../env/db.php";

$name = $_REQUEST['name'];
$btn = $_REQUEST['add-btn'];

if(isset($btn)){
    

    $addQuery = "INSERT INTO test(name) VALUES ('$name')";
    $insertedData = mysqli_query($conn,$addQuery);

      
       if($insertedData){
           header("Location:../index.php");
       }




}

?>