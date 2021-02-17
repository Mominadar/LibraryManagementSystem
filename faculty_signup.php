

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
      $designation_ = $_POST['designation'];
      $department_ = $_POST['department'];
      $address_ = $_POST['address'];
      $contact_ = $_POST['contact'];
      $loginid_ = $_POST['firstname'][0].$_POST['lastname'][1].rand(10,1000);
      $isstudent_ = "false";

      $mgr_id=0;
      $pass = $loginid_;
      $fine = 0;

      $sql = "INSERT INTO library_account(login_id,passcode,fine_amt,mgr_id,is_student) VALUES (?,?,?,?,?)";
      $stmt= $con->prepare($sql);
      $stmt->execute([$loginid_,$pass,$fine,$mgr_id,$isstudent_]);

      $sql = "INSERT INTO uni_faculty(f_fname,f_lname,f_department,f_designation,f_address,
      f_contact,login_id) VALUES (?,?,?,?,?,?,?)";
      $stmt= $con->prepare($sql);
      $stmt->execute([$fname_,$lname_,$department_,$designation_,$address_,$contact_,$loginid_]);
      echo "<script>alert('Faculty Registered successfully')</script>";
      $details = "Login id: ".$loginid_." password: ".$pass;
      echo "<script>alert('$details')</script>";
      header( "Refresh:1; url=facultylogin.php", true, 303);
  }
  catch (PDOException $e) {
    echo "<script>alert('Error')</script>";
    header( "Refresh:1; url=facultylogin.php", true, 303);
  }


  
 
}

?>


