<?php
   include "connect.php";
   
   if(isset($_POST['update'])){
   	$ID = $_POST['ID'];
   	$name = $_POST['name'];
   	$email = $_POST['email'];
   	$gender = $_POST['gender'];
    
   $sql = "UPDATE users SET name = '$name', email = '$email', gender = '$gender' WHERE ID ='$ID' ";
   $result = $conn->query($sql);
   
   if ($result == TRUE){
   	echo "Record Updated";
   }
   else
   {
   	echo "Found Error" .$sql. "<br>" .$conn->error;
   }
   } 
   if (isset($_GET['ID'])){
    $ID = $_GET['ID'];
    $sql = "SELECT * FROM users WHERE ID = '$ID'";
    $result = $conn->query($sql);
    
    
    if ($result->num_rows>0){
   while($row = $result->fetch_assoc()){
   $name = $row['name'];	
   $email = $row['email'];
   $gender = $row['gender'];
   $ID = $row['ID'];
   }
    
   ?>
<!doctype>
<html>
   <head>
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <h4>Update Form</h4>
      <form action = "" method="post">
         <fieldset>
            Name : <br/>
            <input type="text" name="name" value="<?php echo $name; ?>" > 
            <input type="hidden" name="ID" value="<?php echo $ID; ?>" > 
            <br/>
            Email :
            <input type="text" name="email" value="<?php echo $email; ?>" > 
            <br/>
            Gender :
            <input type="text" name="gender" value="<?php echo $gender; ?>" > 
            <br/>
            <br/>
            <input type ="submit" value="update" name = "update">
         </fieldset>
      </form>
   </body>
</html>
<?php
   }else{
    header('Location : view.php');
   }
   }
   
   ?>