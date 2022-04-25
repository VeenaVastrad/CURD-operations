<?php
   include "connect.php";
   
   if(isset($_POST['submit'])){
   $name = $_POST['name'];
   	$email = $_POST['email'];
   	$gender = $_POST['gender'];
   }
   
   $sql = "INSERT INTO users(name,email,gender) VALUES ('$name','$email','$gender')";
   $result = $conn->query($sql);
   
   if ($result == TRUE){
   	echo "New record created";
   }
   else
   {
   	echo "Found Error" .$sql. "<br>" .$conn->error;
   }
   $conn->close();
   ?>
<!doctype html>
<html>
   <body>
      <h4>Create Form</h4>
      <div class="container">
         <form action="" method="POST">
            <fieldset style="width:100px;">
               Name:<br/>
               <input type="text" name="name" />
               <br/>
               Email:<br/>
               <input type="text" name="email" />
               Gender : <br/>
               <input type="text" name="gender" />
               <br/><br/>
               <input type="submit" name="submit" value="submit" />
            </fieldset>
         </form>
      </div>
   </body>
</html>