<!DOCTYPE html>
<html>
<head>
    
    <title>PHP Training_Database from Digisailor</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<?php
include("dbconnection.php");
//  $nm= "";
//  $ag="";
//  if(isset($_POST['submit']))
// {
//    //$nm= $_POST["Nm"];
//    //$em=$_POST["Age"];

// }
?>
<BR>
<div>
    <button onclick="window.location.href='index.php'">ADD NEW EMPLOYEE</button>

</div>


      <div class="container-fluid">
        <tr>
            <td>SL</td>
            <td>ID</td>
            <td>Name</td>
            <td>Age</td>            
        </tr><br>
        
 <?php  

$ret=mysqli_query($con,"select * from empdet order by ID desc");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
 {?>
 
                              <tr>
                              <td><?php echo $cnt;?></td>
                              <td><?php echo $row['ID'];?></td>
                              <td><?php echo " | ".$row['Nm'];?></td>
                              <td><?php echo " | ".$row['Age'];?></td>
                              <td><?php echo " | ".$row['DOB'];?></td>
                              <td><?php echo " | ".$row['Mob'];?></td>
                              <td><?php echo " | ".$row['EMail'];?></td>
                              <a href="ViewProfile.php?uid=<?php echo $row['ID'];?>"> 
                                     <button >view</button></a>   
                              </tr><br>
                              <?php  $cnt=$cnt+1; }


    ?>
    </div>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>
</html>