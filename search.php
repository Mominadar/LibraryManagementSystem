<?php


  $host="remotemysql.com";
  $port=3306;
  $socket="";
  $user="sLNIZ77zSi";
  $password="mvTko0S5qp";
  $dbname="sLNIZ77zSi";
  $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
  $book = $_POST['name'];
  $sql = "SELECT isbn,title,book_year,au_id,published_language,rack_id FROM book where title='$book'";
  $stmt= $con->prepare($sql);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_NUM);
  if(gettype($row)=="boolean"){
    echo "<script>alert('Book not found')</script>";
    
    header( "Refresh:1; url=books.php", true, 303);

  }
  else{
  $b = $row[0];
  header( "Refresh:0; url=bookdetails.php?w=$b", true, 303);
  }
?>