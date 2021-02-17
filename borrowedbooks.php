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
include 'header.php';
?>
  <div class="container"><br>
<h1 class="page-header text-center  text-light" style="background-color: #5D001E;">Borrowed Books</h1><br><br><br>
    <div class="row-justify-content-center">
  <table class="table">
  <thead>
    <tr>
    <th scope="col">Sr no.</th>
      <th scope="col">Member ID</th>
      <th colspan="col">Burrowing Date</th>
      <th scope="col">Return Date</th>
      <th scope="col">Deadline</th>
      <th scope="col">Book Id</th>
      </tr>
  </thead>
  <?php
    $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
    $sql = "SELECT borrowing_date,return_date,dead_line,member_id,b_isbn FROM borrowed_by";
    $stmt= $con->prepare($sql);
    $stmt->execute();
    
    $i = 1;
    $r = "true";
    while($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      ?>
      <tr>
      <td> <?php   echo $i; ?> </td>
      <td> <?php   echo $row[3]; ?> </td>
      <td> <?php   echo $row[0]; ?> </td>
      <td> <?php   echo $row[1]; ?> </td>
      <td> <?php   echo $row[2]; ?> </td>
      <td> <?php   echo $row[4]; ?> </td>
        
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
