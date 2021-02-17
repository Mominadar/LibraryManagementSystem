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
      $sql = "DELETE FROM book WHERE isbn='$id'";
      $stmt= $con->prepare($sql);
      $stmt->execute();
      echo "<script>alert('Deleted Book')</script>";
      header( "Refresh:1; url=Adminbookshelf.php", true, 303);
    
  }

  catch (PDOException $e) {
    echo "<script>alert('Error')</script>";
    header( "Refresh:1; url=Adminbookshelf.php", true, 303);
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
<h1 class="page-header text-center  text-light" style="background-color: #5D001E;">View Books</h1><br><br><br>

    <a href="addbook.php" class="btn btn-primary btn-block btn-lg" style="border-radius: 40px; background-color: #5D001E; margin-left: 30px; padding: 10px 30px; width:200px;" >Add Book </a>
    
    <br><br>
    <div class="row-justify-content-center">
   
  <table class="table">
  <thead>
    <tr>
    <th scope="col">Sr no.</th>
      <th scope="col">Book ID</th>
      <th colspan="col">Title</th>
      <th scope="col">Year</th>
      <th scope="col">Language</th>
      <th scope="col">Edition</th>
      <th scope="col">Actions</th>
      </tr>
  </thead>
  <?php
    $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
    $sql = "SELECT isbn,title,book_year,published_language,book_edition FROM book";
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
      <td> <?php   echo $row[3]; ?> </td>
      <td> <?php   echo $row[4]; ?> </td>
      <td> 
      <form method="POST" action="Adminbookshelf.php">
      <input type="hidden" name="id" value="<?php   echo $row[0]; ?>">
      <input type="submit" name="dsubmit" class="btn btn-primary btn-block btn-lg" style="border-radius: 40px; background-color: #5D001E; margin-left: 30px; padding: 10px 30px; width: 60%;" value="Delete"></td>
      </form>
      <!-- <td>
      <form method="POST" action="Adminbookshelf.php">
      <input type="hidden" name="id" value="<?php   echo $row[0]; ?>">
      <input type="submit" name="esubmit" class="btn btn-primary btn-block btn-lg" style="border-radius: 40px; background-color: #5D001E; margin-left: 30px; padding: 10px 30px; width: 60%;" value="Edit"></td>
      </form>
      </td> -->
    
      
      
     
      
      
    
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
