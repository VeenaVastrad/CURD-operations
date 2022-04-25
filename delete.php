<?php
 include "connect.php";
 
 if(isset($_GET['ID'])){
 $ID = $_GET['ID'];
 $sql = "DELETE FROM users WHERE ID = '$ID'";
 
 $result = $conn->query($sql);
 echo '$ID';
 if($result == TRUE) {
 echo "Record Deleted";
 }else{
 echo "Error:" .$sql. "<br>" .$conn->error;
 }
 }
 ?>