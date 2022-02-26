<!DOCTYPE html>
<html>
<head>
    
    <title>PHP Training_Database from Digisailor</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<?php
session_start();
include("dbconnection.php");

if(isset($_POST['Name']))
{
    $nm= $_POST["Name"];
    $Ag=$_POST["Age"];
    $dob=$_POST["DOB"];
    $mob=$_POST["Mobile"];
    $email=$_POST["Email"];
    
    if($nm!="" && $Ag!=""&& $dob!=""&& $mob!=""&& $email!="")
    {       
        mysqli_query($con,"insert into empdet (Nm,Age,Dob,Mob,Email) values ('$nm','$Ag','$dob','$mob','$email')");
        echo "<script>window.location.href='ViewAll.php'</script>";
        exit();
    }
    else
    {

        echo "<br><br><br> please fill all fields";
    }

}
//  $nm= "";
//  $ag="";
//  if(isset($_POST['submit']) != '')
// {
//    //$nm= $_POST["Nm"];
//    //$em=$_POST["Age"];

// }
?>

<div id="login-page">
	  	<div class="container">
      
	  	
		      <form action="" method="POST">
		        <h2 class="form-login-heading">Employee Information</Details></h2>
                  
		        <div>
  
                    <br>
                    <label>Name</label>
		            <input type="text" name="Name" placeholder="Name Please" autofocus><br>
                    <label>Employee Age</label>
		            <input type="number" name="Age"  placeholder="Age Please"><br >
                    <label>DOB</label>
		            <input type="date" name="DOB"  placeholder="Date of Birth"><br >
                    <label>Mobile Number</label>
		            <input type="Number" name="Mobile"  placeholder="Mobile Number Please"><br >
                    <label>E-Mail</label>
		            <input type="email" name="Email" placeholder="E Mail ID Please"><br>
		            <!-- <input type="submit" class="sub" value="Submit"> -->
                    <button  name="submit"  value="submit" type="submit">Save</button>
                    
		        </div>
		      </form>	  	
              <button onclick="window.location.href='ViewAll.php'">View All</button>
	  	</div>
	  </div>


      
 <?php  

// if ($_SERVER["REQUEST_METHOD"]=="POST")
// {
//     $nm= $_POST["Name"];
//      $Ag=$_POST["Age"];

//      mysqli_query($con,"insert into EmpDet (Nm,Age) values ('".$nm."','.$Ag.')");     
     
//      echo "<script>window.location.href=ViewAll.php</script>";
//      exit();
// }

// if(isset($_POST['Name']))
// {
//     $nm= $_POST["Name"];
//     $Ag=$_POST["Age"];
    
//     if($nm!="")
//     {
       
//         mysqli_query($con,"insert into EmpDet (Nm,Age) values ('".$nm."','.$Ag.')");
//         echo "<script>window.location.href=ViewAll.php</script>";
//         exit();
//         //$_POST = NULL;
//     }

// }

//  if(isset($_POST['Name']) && $_POST['Name'] != "")
// {
    
//     $username = $_POST['Name'];
//     $emailadd = $_POST['Age'];
//     echo "91 <BR>";
//     $sql = "INSERT INTO EmpDet (Nm,Age) VALUES ('$username','$emailadd')";
//     if(empty($username) || empty($emailadd)){
        
//           echo "Please input all field";
//           exit;
//     } 
//     else 
//     {
//            if ($con->query($sql)) {
//               echo "Inserted! <BR>";
//            }
//            else
//            {
//               echo "Error";
//            }
//      }
//      // = null;
//      $_POST = NULL;
// }
?>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>
</html>