<?php

include "../env/db.php";
if(isset($_REQUEST['edit-btn'])){

    $name = $_REQUEST['name'];
    $hiddenId = $_REQUEST['hidden_id'];
    $updateQuery = "UPDATE test SET name='$name' WHERE id = $hiddenId";
    $test = mysqli_query($conn,$updateQuery);

      
      if($test){
          header("Location:../index.php");
      }


}



?>