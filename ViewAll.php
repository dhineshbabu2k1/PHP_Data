<!DOCTYPE html>
<html>
<head>

    <title>PHP Training_Database from Digisailor</title>
    <!-- <link rel="stylesheet" href="bootstrap.css"> -->
    <link href="bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <style>
   th,td {
    padding: 5px;
    text-align:center;
  }
  </style>
</head>
<body>
<?php
include "dbconnection.php";

if (isset($_GET['id'])) {
    $adminid = $_GET['id'];
    $ret = mysqli_query($con, "SELECT * FROM empdet where id='$adminid'");
    $num = mysqli_fetch_array($ret);
    if ($num > 0) {

        $msg = mysqli_query($con, "delete from empdet where id='$adminid'");
        if ($msg) {
            echo "<script>alert('Data deleted');</script>";
        }
    }
}
?>
<br>
<div>
    <button class="btn btn-warning" onclick="window.location.href='index.php'">ADD NEW EMPLOYEE</button>

</div>
<br>
      <div class="table-reponsive">
        <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col"><b>SL</b></th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">DOB</th>
            <th scope="col">Mobile</th>
            <th scope="col">E-Mail</th>
            <!-- <th colspan="2";align="center" >Actions</th> -->
            <!-- <th scope="col"></th> -->
            <th colspan="2" class="text-align: center" >Actions</th>
        </tr>
        </thead>
        <tbody>
 <?php

$ret = mysqli_query($con, "select * from empdet order by ID desc");
$cnt = 1;
while ($row = mysqli_fetch_array($ret)) { ?>

        <tr>
            <td><?php echo $cnt; ?></td>
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['Nm']; ?></td>
            <td><?php echo $row['Age']; ?></td>
            <td><?php echo $row['DOB']; ?></td>
            <td><?php echo $row['Mob']; ?></td>
            <td><?php echo $row['EMail']; ?></td>
            <td><a href="ViewProfile.php?uid=<?php echo $row['ID']; ?>">
            <button class="btn btn-success  btn-sm">View</button></a>  </td>

            <td> <a href="ViewAll.php?id=<?php echo $row['ID']; ?>">
            <button class="btn btn-danger btn-sm"  onClick="return confirm('Do you really want to delete');">Delete</button></a></td>
        </tr>
        <?php $cnt = $cnt + 1;}

?>
    </tbody>
    </table>
    </div>

    <script src="jquery-3.6.0.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>
</html>