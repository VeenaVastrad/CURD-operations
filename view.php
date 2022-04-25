<?php
   include "connect.php";
   $sql ="select * from users";
   $result = $conn->query($sql);
  ?>
<!doctype>
<html>
   <head>
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <div class="container">
         <table class="table">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Gender</th>
               </tr>
            </thead>
            <tbody>
               <?php if ($result->num_rows>0){
                  while ($row = $result->fetch_assoc()){
                  	?>
               <tr>
                  <td><?php echo $row['ID'];?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['gender'];?></td>
                  <td><a class="btn btn-info" href="update.php?ID=<?php echo $row['ID'];?>">
                     Edit</a>&nbsp;
                     <a class="btn btn-danger" href="delete.php?ID=<?php echo $row['ID'];?>">
                     Delete</a>
                  </td>
               </tr>
               <?php }
                  }
                  ?>
            </tbody>
         </table>
      </div>
   </body>
</html>