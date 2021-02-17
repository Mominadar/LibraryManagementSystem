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
<h1 class="page-header text-center  text-light" style="background-color: #5D001E;">Pending Dues</h1><br><br><br>
    <div class="row-justify-content-center">
  <table class="table">
  <thead>
    <tr>
    <th scope="col">Sr no.</th>
      <th scope="col">Login ID</th>
      <th colspan="col">Fine Amount</th>
      <th scope="col">Student/Faculty</th>
      </tr>
  </thead>
  <?php
    $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
    $sql = "SELECT login_id,fine_amt,is_student FROM library_account";
    $stmt= $con->prepare($sql);
    $stmt->execute();
    
    $i = 1;
    $r = "true";
    while($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $p = strcmp($row[2],$r);
      if($p==0){
        $e = "Student";
      }
      else{
        $e = "Faculty";
      }
      ?>
      <tr>
      <td> <?php   echo $i; ?> </td>
      <td> <?php   echo $row[0]; ?> </td>
      <td> <?php   echo $row[1]; ?> </td>
      <td> <?php   echo $e; ?> </td>
      
     
      
      
    
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
