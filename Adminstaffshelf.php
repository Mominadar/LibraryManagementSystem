<?php

if(isset($_POST['dsubmit']) )
{
  
  $host="remotemysql.com";
  $port=3306;
  $socket="";
  $user="sLNIZ77zSi";
  $password="mvTko0S5qp";
  $dbname="sLNIZ77zSi";

  try {
      $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
      $id = $_POST['id'];
      $sql = "DELETE FROM staff WHERE login_id='$id'";
      $stmt= $con->prepare($sql);
      $stmt->execute();
      echo "<script>alert('Deleted Staff')</script>";
      header( "Refresh:1; url=Adminstaffshelf.php", true, 303);
    
  }

  catch (PDOException $e) {
    echo "<script>alert('Error')</script>";
    header( "Refresh:1; url=Adminstaffshelf.php", true, 303);
  }


  
 
}

if(isset($_POST['wsubmit']) )
{
  
  $host="remotemysql.com";
  $port=3306;
  $socket="";
  $user="sLNIZ77zSi";
  $password="mvTko0S5qp";
  $dbname="sLNIZ77zSi";

  try {
      $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
      $id = $_POST['id'];
      $sql = "DELETE FROM other_workers WHERE s_id='$id'";
      $stmt= $con->prepare($sql);
      $stmt->execute();
      echo "<script>alert('Deleted Worker')</script>";
      header( "Refresh:1; url=Adminstaffshelf.php", true, 303);
    
  }

  catch (PDOException $e) {
    echo "<script>alert('Error')</script>";
    header( "Refresh:1; url=Adminstaffshelf.php", true, 303);
  }


  
 
}

?>



<!DOCTYPE html>
<html>
<head>
  <title>BookShelf</title>
</head>
<body>
</html><?php 
include 'connection.php';
?>
<?php 
include 'adminheader.php';
?>
  <div class="container"><br>
<h1 class="page-header text-center  text-light" style="background-color: #5D001E;">View Staff</h1><br><br><br>

    <a href="addstaff.php" class="btn btn-primary btn-block btn-lg" style="border-radius: 40px; background-color: #5D001E; margin-left: 30px; padding: 10px 30px; width:200px;" >Add Staff</a>
    
    <br><br>
    <div class="row-justify-content-center">
   
  <table class="table">
  <thead>
    <tr>
    <th scope="col">Sr no.</th>
      <th scope="col">Staff ID</th>
      <th scope="col">Name</th>
      <th colspan="col">Contact</th>
      <th scope="col">Salary</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
      </tr>
  </thead>
  <?php
    $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
    $sql = "SELECT s_id,s_fname,s_lname,s_contact,salary,address,login_id FROM staff";
    $stmt= $con->prepare($sql);
    $stmt->execute();
    
    $i = 1;
    $r = "true";
    while($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      ?>
      <tr>
      <td> <?php   echo $i; ?> </td>
      <td> <?php   echo $row[0]; ?> </td>
      <td> <?php   echo $row[1]." ".$row[2]; ?> </td>
      <td> <?php   echo $row[3]; ?> </td>
      <td> <?php   echo $row[4]; ?> </td>
      <td> <?php   echo $row[5]; ?> </td>
      <td> 
      <form method="POST" action="Adminstaffshelf.php">
      <input type="hidden" name="id" value="<?php   echo $row[6]; ?>">
      <input type="submit" name="dsubmit" class="btn btn-primary btn-block btn-lg" style="border-radius: 40px; background-color: #5D001E; margin-left: 30px; padding: 10px 30px; width: 60%;" value="Delete"></td>
      </form>
     
    
       
     
      
      
    
    </tr>
<?php
    




    
    $i = $i+1;
  }?>
</table><br><br>
      
</div>

<h1 class="page-header text-center  text-light" style="background-color: #5D001E;">View Other Workers</h1><br><br><br>

    <a href="addworker.php" class="btn btn-primary btn-block btn-lg" style="border-radius: 40px; background-color: #5D001E; margin-left: 30px; padding: 10px 30px; width:200px;" >Add Worker</a>
    
    <br><br>
<div class="row-justify-content-center">
   
  <table class="table">
  <thead>
    <tr>
    <th scope="col">Sr no.</th>
      <th scope="col">Worker ID</th>
      <th scope="col">Designation</th>
      <th scope="col">Actions</th>
      </tr>
  </thead>
  <?php
    $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
    $sql = "SELECT s_id,designation FROM other_workers";
    $stmt= $con->prepare($sql);
    $stmt->execute();
    
    $i = 1;
    $r = "true";
    while($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      ?>
      <tr>
      <td> <?php   echo $i; ?> </td>
      <td> <?php   echo $row[0]; ?> </td>
      <td> <?php   echo $row[1] ?> </td>
      <td> 
      <form method="POST" action="Adminstaffshelf.php">
      <input type="hidden" name="id" value="<?php   echo $row[0]; ?>">
      <input type="submit" name="wsubmit" class="btn btn-primary btn-block btn-lg" style="border-radius: 40px; background-color: #5D001E; margin-left: 30px; padding: 10px 30px; width: 60%;" value="Delete"></td>
      </form>
     
    
       
     
      
      
    
    </tr>
<?php
    




    
    $i = $i+1;
  }?>
</table><br><br>
      
</div>
</div>

<?php 
include 'firstfooter.php';
?>
