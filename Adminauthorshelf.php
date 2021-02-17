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
      $sql = "DELETE FROM author WHERE au_id='$id'";
      $stmt= $con->prepare($sql);
      $stmt->execute();
      echo "<script>alert('Deleted Author')</script>";
      header( "Refresh:1; url=Adminauthorshelf.php", true, 303);
    
  }

  catch (PDOException $e) {
    echo "<script>alert('Error')</script>";
    header( "Refresh:1; url=Adminauthorshelf.php", true, 303);
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
<h1 class="page-header text-center  text-light" style="background-color: #5D001E;">View Authors</h1><br><br><br>

    <a href="addauthor.php" class="btn btn-primary btn-block btn-lg" style="border-radius: 40px; background-color: #5D001E; margin-left: 30px; padding: 10px 30px; width:200px;" >Add Author </a>
    
    <br><br>
    <div class="row-justify-content-center">
   
  <table class="table">
  <thead>
    <tr>
    <th scope="col">Sr no.</th>
      <th scope="col">Author ID</th>
      <th colspan="col">First Name</th>
      <th scope="col">Last Name</th>
      
      </tr>
  </thead>
  <?php
    $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
    $sql = "SELECT au_id,a_fname,a_lname FROM author";
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
      <td> <?php   echo $row[1]; ?> </td>
      <td> <?php   echo $row[2]; ?> </td>
      <td> 
      <form method="POST" action="Adminauthorshelf.php">
      <input type="hidden" name="id" value="<?php   echo $row[0]; ?>">
      <input type="submit" name="dsubmit" class="btn btn-primary btn-block btn-lg" style="border-radius: 40px; background-color: #5D001E; margin-left: 30px; padding: 10px 30px; width: 60%;" value="Delete"></td>
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
