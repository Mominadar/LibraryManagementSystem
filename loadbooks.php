<?php
$extra="";
   $con = mysqli_connect('localhost','root','');
   $row2 = mysqli_select_db($con,'bookstore');
   $q = $_REQUEST['q'];
   $r = $_REQUEST['r'];
    echo"<br><br>
<h1 class='display1'>".$r." Books</h1>
<br>";
   $data = "SELECT title,author_id,genre_id,rating,summary,details,comments,cover from book WHERE genre_id='$q'";
   $result = mysqli_query($con, $data);
   $num = mysqli_num_rows($result);
   $i = 0;
  while($row = $result->fetch_array()) 
    {
        if($i==0)
        {
          echo "<div class='row'>";
        }
       
    echo "<div class='col-md-3' style='margin-left: 10px; margin-right: 35px;' >
    <div class='card' style='width: 25rem; height: 550px; '>
  <img class='card-img-top cardimg' src='$row[7]' alt='$row[7]' style='height: 350px'>
  <div class='card-body'>
    <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  </div>
  </div>";
    if($i==2)
    {
          echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo"<br>
"; 
?> 
<script>
  <?php
function getsecurityquestions()
{
  
  $con = mysqli_connect('localhost','root','');
  $row2 = mysqli_select_db($con,'bookstore');
  $data = "SELECT id,genrename from genre";
  $result = mysqli_query($con, $data);
  while($row = $result->fetch_assoc()) 
    {
       echo "<option value=".$row['id'].">".$row['genrename']."</option>";
    }
  
} ?>



</script>
