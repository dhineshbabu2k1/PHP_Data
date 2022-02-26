<?php
session_start();
include'dbconnection.php';
/**
if(isset($_POST['Name']))
{
    $nm= $_POST["Name"];
    $Ag=$_POST["Age"];
    $dob=$_POST["DOB"];
    $mob=$_POST["Mobile"];
    $email=$_POST["Email"];
    
           
        mysqli_query($con,"update empdet set Nm='$ENm',Age='$EAge', Mob='$EMob',EMail='$Eemail' where id='$Eid')");
        echo "<script>window.location.href='ViewAll.php'</script>";
    

}
*/
if(isset($_POST['Submit']))
{
    
    $Eid=$_POST['Eid'];
	$ENm=$_POST['ENm'];
	$EAge=$_POST['EAge'];
	$EDob=$_POST['EDob'];
	$EMob=$_POST['EMob'];
	$Eemail=$_POST['Eemail'];
	
	 mysqli_query($con,"update empdet set Nm='$ENm',Age='$EAge', DOB='$EDob', Mob='$EMob',EMail='$Eemail' where id='$Eid'");
     
   	 echo "<script>window.location.href='ViewAll.php'</script>";
   
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Employee Details and Updation</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
        </header>
      <aside>
      </aside>
      <?php 
      $ret= mysqli_query($con,"select * from empdet where id='".$_GET['uid']."'");
	  while($row=mysqli_fetch_array($ret))
	  
	  {?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?php echo $row['Nm'];?>'s Information</h3>
             	
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']=""; ?></p>
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Emp id </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="Eid" value="<?php echo $row['ID'];?>" readonly>
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Employee Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="ENm" value="<?php echo $row['Nm'];?>" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Age</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="EAge" value="<?php echo $row['Age'];?>"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">DOB</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control" name="EDob" value="<?php echo $row['DOB'];?>"  >
                              </div>
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Mobile</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="EMob" value="<?php echo $row['Mob'];?>"  >
                              </div>
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Email</label>
                              <div class="col-sm-10">
                                  <input type="email" class="form-control" name="Eemail" value="<?php echo $row['EMail'];?>"  >
                              </div>
                          </div>
                          <br>
                          <div>
                          <input type="submit" name="Submit" value="Update" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
              <div>
            <br>
            <br>
            <button onclick="window.location.href='index.php'">ADD NEW EMPLOYEE</button>
            <br>
            <br>
            <button onclick="window.location.href='ViewAll.php'">View All</button>

</div>
            </section>
        <?php } ?>
      </section></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>