<!DOCTYPE html>
<html>
<head>
  <title>Books Details</title>
</head>
<body>
<style>
  .page-header
  {
    background: rgb(34,193,195);
</style>

</body>
</html>
<?php 
include 'connection.php';
?>
<?php
$book=0;
if(isset($_GET['w']))
{
  $book = $_GET['w'];
  $_SESSION['book'] =  $_GET['w'];
}
else
{
  $book =  $_SESSION['book'];
}



  $host="remotemysql.com";
  $port=3306;
  $socket="";
  $user="sLNIZ77zSi";
  $password="mvTko0S5qp";
  $dbname="sLNIZ77zSi";
  $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
  $sql = "SELECT isbn,title,book_year,au_id,published_language,rack_id FROM book where isbn='$book'";
  $stmt= $con->prepare($sql);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_NUM);
  $data1 = "SELECT a_fname,a_lname from author where au_id = '$row[3]'";
  $stmt= $con->prepare($data1);
  $stmt->execute();
  $row1 = $stmt->fetch(PDO::FETCH_NUM);
  $data1 = "SELECT rack_number,rack_floor from rack where rack_id = '$row[5]'";
  $stmt= $con->prepare($data1);
  $stmt->execute();
  $row2 = $stmt->fetch(PDO::FETCH_NUM);

  //  if(isset($_POST['bsubmit']))
  //  {
    
  //    $id = $_SESSION['book'];
  //    $user = $_SESSION['user'];
  //    $data = "INSERT into bookshelf(book_id, user_id) values ('$id', '$user')";
  //    $result1 = mysqli_query($con, $data);
  //    echo "<script>alert('Book".$id."added to shelf of user !".$user."')</script>";
  //    header( "Refresh:1; url=bookdetails.php?w=$book", true, 303);
     
  //  }
   
?>
<?php 
include 'header.php';
?>
<br>
    <h1 class="page-header text-center text-light" style="background-color: #5D001E;">BOOKS DETAILS</h1>

 
		<div class="row">

		<div class="col-md-3" style="padding: 20px">
					<img src="images/book_cover.png" alt="book image"; style="width:280px;height:250px;position:right top; text-align: justify; float:left; clear:right; margin-left: 20px">
		</div>
<div class="col-md-9">
  <br>
  <p class='card-text'> Book Title:  <?php echo $row[1]; ?></p>
  <p class='card-text'> Author:  <?php echo $row1[0]." ".$row1[1]; ?></p>
  <p class='card-text'> Book Year: <?php echo $row[2]; ?></p>
  <p class='card-text'> Book Language: <?php echo $row[4]; ?></p>
  <p class='card-text'> Location:</p>
  <p class='card-text'> Rack Number: <?php echo $row2[0]; ?></p>
  <p class='card-text'> Rack Floor:  <?php echo $row2[1]; ?></p>
  
	<br>
<p fontSize="12px";>
<br>
		
<br><br>


</div></p></div></div>
    <br><br>
</div>
 <?php 
include 'firstfooter.php';
?>

