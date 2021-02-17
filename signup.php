

<?php
session_start();
if(isset($_POST['submit']) )
{
  
  $host="remotemysql.com";
  $port=3306;
  $socket="";
  $user="sLNIZ77zSi";
  $password="mvTko0S5qp";
  $dbname="sLNIZ77zSi";

  try {
      $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
      $fname_ = $_POST['firstname'];
      $lname_ = $_POST['lastname'];
      $gender_ = $_POST['gender'];
      $department_ = $_POST['department'];
      $address_ = $_POST['address'];
      $loginid_ = $_POST['firstname'][0].$_POST['lastname'][1].rand(10,1000);
      $isstudent_ = "true";

      $mgr_id=0;
      $pass = $loginid_;
      $fine = 0;

      $sql = "INSERT INTO library_account(login_id,passcode,fine_amt,mgr_id,is_student) VALUES (?,?,?,?,?)";
      $stmt= $con->prepare($sql);
      $stmt->execute([$loginid_,$pass,$fine,$mgr_id,$isstudent_]);

      $sql = "INSERT INTO student(gender,department,std_lname,std_fname,std_address,login_id) VALUES (?,?,?,?,?,?)";
      $stmt= $con->prepare($sql);
      $stmt->execute([$gender_,$department_,$fname_,$lname_,$address_,$loginid_]);
      echo "<script>alert('Student Registered successfully')</script>";
      $details = "Login id: ".$loginid_." password: ".$pass;
      echo "<script>alert('$details')</script>";
      header( "Refresh:1; url=index.php", true, 303);
  }
  catch (PDOException $e) {
    echo "<script>alert('Error')</script>";
    header( "Refresh:1; url=index.php", true, 303);
  }


  
 
}

?>


