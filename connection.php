<?php

session_start();
if(!isset($_SESSION['user']))
{
   echo "<script>alert('Login or Signup to access this page! Redirecting to home page...')</script>";
   header( "Refresh:1; url=homelogin.php", true, 303);

}
$host="remotemysql.com";
$port=3306;
$socket="";
$user="sLNIZ77zSi";
$password="mvTko0S5qp";
$dbname="sLNIZ77zSi";

try {
   $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
   
}

catch (PDOException $e) {
   echo "<script>alert('Error')</script>";
   header( "Refresh:1; url=index.php", true, 303);
}


?>