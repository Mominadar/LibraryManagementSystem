<?php

echo"<h1 class='display1'>Romance Genre Authors</h1>
<div id='all' class='scrollmenu'>
<br>";
 
   $con = mysqli_connect('localhost','root','');
   $row2 = mysqli_select_db($con,'bookstore');
   $data = "SELECT name,dob,bio,genre_id,picture from author where genre_id=2";
   $result = mysqli_query($con, $data);
   $num = mysqli_num_rows($result);
   $i = 0;
  while($row = $result->fetch_array()) 
    {
        if($i==0)
        {
        	echo "<div class='row'>";
        }
       
   	echo "<div class='col-md-3' style='margin-left: 10px; margin-right: 35px; margin-top: 10px; margin-bottom: 20px' >
    <div class='card' style='width: 15rem; '>
  <img class='card-img-top cardimg' src='$row[4]' alt='$row[4]' style='height: 250px'>
  <div class='card-body'>
    <p class='card-text'>John Green</p>
  </div>
  </div>
  </div>";
    if($i==2)
    {
        	echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo "<br><br>
</div></div><br><br>";

echo"<h1 class='display1'>Mystery Genre Authors</h1>
<div id='all' class='scrollmenu'>
<br>";
 
   $con = mysqli_connect('localhost','root','');
   $row2 = mysqli_select_db($con,'bookstore');
   $data = "SELECT name,dob,bio,genre_id,picture from author where genre_id=1";
   $result = mysqli_query($con, $data);
   $num = mysqli_num_rows($result);
   $i = 0;
  while($row = $result->fetch_array()) 
    {
        if($i==0)
        {
        	echo "<div class='row'>";
        }
       
   	echo "<div class='col-md-3' style='margin-left: 10px; margin-right: 35px; margin-top: 10px; margin-bottom: 20px' >
    <div class='card' style='width: 15rem; '>
  <img class='card-img-top cardimg' src='$row[4]' alt='$row[4]' style='height: 250px'>
  <div class='card-body'>
    <p class='card-text'>John Green</p>
  </div>
  </div>
  </div>";
    if($i==2)
    {
        	echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo "<br><br>
</div></div><br><br>";
echo"<h1 class='display1'>Fiction Genre Authors</h1>
<div id='all' class='scrollmenu'>
<br>";
 
   $con = mysqli_connect('localhost','root','');
   $row2 = mysqli_select_db($con,'bookstore');
   $data = "SELECT name,dob,bio,genre_id,picture from author where genre_id=3";
   $result = mysqli_query($con, $data);
   $num = mysqli_num_rows($result);
   $i = 0;
  while($row = $result->fetch_array()) 
    {
        if($i==0)
        {
        	echo "<div class='row'>";
        }
       
   	echo "<div class='col-md-3' style='margin-left: 10px; margin-right: 35px; margin-top: 10px; margin-bottom: 20px' >
    <div class='card' style='width: 15rem; '>
  <img class='card-img-top cardimg' src='$row[4]' alt='$row[4]' style='height: 250px'>
  <div class='card-body'>
    <p class='card-text'>John Green</p>
  </div>
  </div>
  </div>";
    if($i==2)
    {
        	echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo "<br><br>
</div></div><br><br>";
echo"<h1 class='display1'>Psychology Genre Authors</h1>
<div id='all' class='scrollmenu'>
<br>";
 
   $con = mysqli_connect('localhost','root','');
   $row2 = mysqli_select_db($con,'bookstore');
   $data = "SELECT name,dob,bio,genre_id,picture from author where genre_id=4";
   $result = mysqli_query($con, $data);
   $num = mysqli_num_rows($result);
   $i = 0;
  while($row = $result->fetch_array()) 
    {
        if($i==0)
        {
        	echo "<div class='row'>";
        }
       
   	echo "<div class='col-md-3' style='margin-left: 10px; margin-right: 35px; margin-top: 10px; margin-bottom: 20px' >
    <div class='card' style='width: 15rem; '>
  <img class='card-img-top cardimg' src='$row[4]' alt='$row[4]' style='height: 250px'>
  <div class='card-body'>
    <p class='card-text'>John Green</p>
  </div>
  </div>
  </div>";
    if($i==2)
    {
        	echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo "<br><br>
</div></div><br><br>";
echo"<h1 class='display1'>Self-Help Genre Authors</h1>
<div id='all' class='scrollmenu'>
<br>";
 
   $con = mysqli_connect('localhost','root','');
   $row2 = mysqli_select_db($con,'bookstore');
   $data = "SELECT name,dob,bio,genre_id,picture from author where genre_id=5";
   $result = mysqli_query($con, $data);
   $num = mysqli_num_rows($result);
   $i = 0;
  while($row = $result->fetch_array()) 
    {
        if($i==0)
        {
        	echo "<div class='row'>";
        }
       
   	echo "<div class='col-md-3' style='margin-left: 10px; margin-right: 35px; margin-top: 10px; margin-bottom: 20px' >
    <div class='card' style='width: 15rem; '>
  <img class='card-img-top cardimg' src='$row[4]' alt='$row[4]' style='height: 250px'>
  <div class='card-body'>
    <p class='card-text'>John Green</p>
  </div>
  </div>
  </div>";
    if($i==2)
    {
        	echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo "<br><br>
</div></div><br><br>";
echo"<h1 class='display1'>Children Books Genre Authors</h1>
<div id='all' class='scrollmenu'>
<br>";
 
   $con = mysqli_connect('localhost','root','');
   $row2 = mysqli_select_db($con,'bookstore');
   $data = "SELECT name,dob,bio,genre_id,picture from author where genre_id=6";
   $result = mysqli_query($con, $data);
   $num = mysqli_num_rows($result);
   $i = 0;
  while($row = $result->fetch_array()) 
    {
        if($i==0)
        {
        	echo "<div class='row'>";
        }
       
   	echo "<div class='col-md-3' style='margin-left: 10px; margin-right: 35px; margin-top: 10px; margin-bottom: 20px' >
    <div class='card' style='width: 15rem; '>
  <img class='card-img-top cardimg' src='$row[4]' alt='$row[4]' style='height: 250px'>
  <div class='card-body'>
    <p class='card-text'>John Green</p>
  </div>
  </div>
  </div>";
    if($i==2)
    {
        	echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo "<br><br>
</div></div><br><br>";
echo"<h1 class='display1'>Cooking Genre Authors</h1>
<div id='all' class='scrollmenu'>
<br>";
 
   $con = mysqli_connect('localhost','root','');
   $row2 = mysqli_select_db($con,'bookstore');
   $data = "SELECT name,dob,bio,genre_id,picture from author where genre_id=7";
   $result = mysqli_query($con, $data);
   $num = mysqli_num_rows($result);
   $i = 0;
  while($row = $result->fetch_array()) 
    {
        if($i==0)
        {
        	echo "<div class='row'>";
        }
       
   	echo "<div class='col-md-3' style='margin-left: 10px; margin-right: 35px; margin-top: 10px; margin-bottom: 20px' >
    <div class='card' style='width: 15rem; '>
  <img class='card-img-top cardimg' src='$row[4]' alt='$row[4]' style='height: 250px'>
  <div class='card-body'>
    <p class='card-text'>John Green</p>
  </div>
  </div>
  </div>";
    if($i==2)
    {
        	echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo "<br><br>
</div></div><br><br>";
echo"<h1 class='display1'>Politics Genre Authors</h1>
<div id='all' class='scrollmenu'>
<br>";
 
   $con = mysqli_connect('localhost','root','');
   $row2 = mysqli_select_db($con,'bookstore');
   $data = "SELECT name,dob,bio,genre_id,picture from author where genre_id=8";
   $result = mysqli_query($con, $data);
   $num = mysqli_num_rows($result);
   $i = 0;
  while($row = $result->fetch_array()) 
    {
        if($i==0)
        {
        	echo "<div class='row'>";
        }
       
   	echo "<div class='col-md-3' style='margin-left: 10px; margin-right: 35px; margin-top: 10px; margin-bottom: 20px' >
    <div class='card' style='width: 15rem; '>
  <img class='card-img-top cardimg' src='$row[4]' alt='$row[4]' style='height: 250px'>
  <div class='card-body'>
    <p class='card-text'>John Green</p>
  </div>
  </div>
  </div>";
    if($i==2)
    {
        	echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo "<br><br>
</div></div><br><br>";

echo"<h1 class='display1'>History Genre Authors</h1>
<div id='all' class='scrollmenu'>
<br>";
 
   $con = mysqli_connect('localhost','root','');
   $row2 = mysqli_select_db($con,'bookstore');
   $data = "SELECT name,dob,bio,genre_id,picture from author where genre_id=9";
   $result = mysqli_query($con, $data);
   $num = mysqli_num_rows($result);
   $i = 0;
  while($row = $result->fetch_array()) 
    {
        if($i==0)
        {
        	echo "<div class='row'>";
        }
       
   	echo "<div class='col-md-3' style='margin-left: 10px; margin-right: 35px; margin-top: 10px; margin-bottom: 20px' >
    <div class='card' style='width: 15rem; '>
  <img class='card-img-top cardimg' src='$row[4]' alt='$row[4]' style='height: 250px'>
  <div class='card-body'>
    <p class='card-text'>John Green</p>
  </div>
  </div>
  </div>";
    if($i==2)
    {
        	echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo "<br><br>
</div></div><br><br>";

echo"<h1 class='display1'>Biography Genre Authors</h1>
<div id='all' class='scrollmenu'>
<br>";
 
   $con = mysqli_connect('localhost','root','');
   $row2 = mysqli_select_db($con,'bookstore');
   $data = "SELECT name,dob,bio,genre_id,picture from author where genre_id=10";
   $result = mysqli_query($con, $data);
   $num = mysqli_num_rows($result);
   $i = 0;
  while($row = $result->fetch_array()) 
    {
        if($i==0)
        {
        	echo "<div class='row'>";
        }
       
   	echo "<div class='col-md-3' style='margin-left: 10px; margin-right: 35px; margin-top: 10px; margin-bottom: 20px' >
    <div class='card' style='width: 15rem; '>
  <img class='card-img-top cardimg' src='$row[4]' alt='$row[4]' style='height: 250px'>
  <div class='card-body'>
    <p class='card-text'>John Green</p>
  </div>
  </div>
  </div>";
    if($i==2)
    {
        	echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo "<br><br>
</div></div><br><br>";



?>