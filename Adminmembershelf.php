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
      $is = $_POST['is_student'];

      if($is=="true"){
        $sql = "DELETE FROM student WHERE login_id='$id'";
        $stmt= $con->prepare($sql);
        $stmt->execute();
      }
      else{
        $sql = "DELETE FROM uni_faculty WHERE login_id='$id'";
        $stmt= $con->prepare($sql);
        $stmt->execute();
      }
      
      $sql = "DELETE FROM library_card WHERE member_login_id='$id'";
      $stmt= $con->prepare($sql);
      $stmt->execute();

      $sql = "DELETE FROM library_account WHERE login_id='$id'";
      $stmt= $con->prepare($sql);
      $stmt->execute();
     
      echo "<script>alert('Deleted Member')</script>";
      header( "Refresh:1; url=Adminmembershelf.php", true, 303);
    
  }

  catch (PDOException $e) {
    echo $e;
    echo "<script>alert('Error')</script>";
    header( "Refresh:1; url=Adminmembershelf.php", true, 303);
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
<h1 class="page-header text-center  text-light" style="background-color: #5D001E;">View Members</h1><br><br><br>

    
    <br><br>
    <div class="row-justify-content-center">
   
  <table class="table">
  <thead>
    <tr>
    <th scope="col">Sr no.</th>
      <th scope="col">Member ID</th>
      <th colspan="col">Fine</th>
      <th scope="col">Student/Faculty</th>
      <th scope="col">Actions</th>
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
      <td> 
      <form method="POST" action="Adminmembershelf.php">
      <input type="hidden" name="id" value="<?php   echo $row[0]; ?>">
      <input type="hidden" name="is_student" value="<?php   echo $row[2]; ?>">
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
