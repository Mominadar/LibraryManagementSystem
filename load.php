<?php
$extra="";
   $con = mysqli_connect('localhost','root','');
   $row2 = mysqli_select_db($con,'bookstore');
   $q = $_REQUEST['q'];
   if($q==0)
   {
   echo "<br>
  <h1 class='page-header text-center text-light' style='background-color: #5D001E;'>Search/Explore Books</h1>
<br><br>
<form action='search.php' method='POST'>
    <div class='row'>
    <div class='col-md-1'>
      </div>
    <div class='col-md-8'>
      <input class='form-control' type='text' placeholder='Search Books' name='name'>
      </div>
      <div class='col-md-3'>
      <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
      </div>
      <div class='col-md-1'>
      </div>
      </div>
</form>
<div >
<div id='demo'></div>
<div id='all'>
  <br><br>
<h1 class='display1'>All Books</h1>
<br>";
   $data = "SELECT title,author_id,genre_id,rating,summary,details,comments,cover,id from book";
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
    <a href='bookdetails.php?w=$row[8]'><div class='card' style='width: 25rem; height: 550px;  '>
  <img class='card-img-top cardimg' src='$row[7]' alt='$row[7]' style='height: 350px'>
  <div class='card-body'>
    <p class='card-text'>".$row[4]."</p>
  </div>
  </div></a>
  </div>";
    if($i==2)
    {
          echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
 
echo "
<br>
</div>
</div>
<br><br><br>";
   }
   if($q==1)
   {
    echo"<br><h1 class='page-header text-center text-light' style='background-color: #5D001E;'>Search/Explore Books</h1><br><br>";
   echo"<select name='genre' class='form-control' id='genre' required onchange='loadDoc1(this.value, this.text)'>";
   echo getsecurityquestions();
    echo "</select>
    <div class='divs'>
    <div id='demo'></div>
    <div id='all'>
  <br><br>
<h1 class='display1'>Mystery Books</h1>
<br>";
   $data = "SELECT title,author_id,genre_id,rating,summary,details,comments,cover,id from book WHERE genre_id=1";
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
    <a href='bookdetails.php?w=$row[8]'><div class='card' style='width: 25rem; height: 550px; '>
  <img class='card-img-top cardimg' src='$row[7]' alt='$row[7]' style='height: 350px'>
  <div class='card-body'>
    <p class='card-text'>".$row[4]."</p>
  </div>
  </div></a>
  </div>";
    if($i==2)
    {
          echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo"<br>
</div>
</div>
<br><br><br>";
   }
   else if($q==2)
   {
       echo"<br><h1 class='page-header text-center text-light' style='background-color: #5D001E;'>Search/Explore Books</h1><br><br>";
   echo"<br><br>
<form action='search.php' method='POST'>
    <div class='row'>
    <div class='col-md-1'>
      </div>
    <div class='col-md-8'>
      <input class='form-control' type='text' placeholder='Search Books' name='name'>
      </div>
      <div class='col-md-3'>
      <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
      </div>
      <div class='col-md-1'>
      </div>
      </div>
</form>";
echo "
    <div class='divs'>
    <div id='demo'></div>
    <div id='all'>
  <br><br>
<h1 class='display1'>Popular Books</h1>
<br>";
   $data = "SELECT title,author_id,genre_id,rating,summary,details,comments,cover,id from book WHERE rating>4";
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
    <a href='bookdetails.php?w=$row[8]'><div class='card' style='width: 25rem; height: 550px; '>
  <img class='card-img-top cardimg' src='$row[7]' alt='$row[7]' style='height: 350px'>
  <div class='card-body'>
    <p class='card-text'>".$row[4]."</p>
  </div>
  </div></a>
  </div>";
    if($i==2)
    {
          echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo"<br>
</div>
</div>
<br><br><br>";
   }
   else if($q==3)
   {
        echo"<br><h1 class='page-header text-center text-light' style='background-color: #5D001E;'>Search/Explore Books</h1><br><br>";
   echo"<select name='genre' class='form-control' id='genre' required onchange='loadDoc2(this.value)'>";
   echo getauthors();
    echo "</select>
    <div class='divs'>
    <div id='demo'></div>
    <div id='all'>
  <br><br>
<h1 class='display1'>John Green Books</h1>
<br>";
   $data = "SELECT title,author_id,genre_id,rating,summary,details,comments,cover,id from book WHERE author_id=1";
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
    <a href='bookdetails.php?w=$row[8]'><div class='card' style='width: 25rem; height: 550px; '>
  <img class='card-img-top cardimg' src='$row[7]' alt='$row[7]' style='height: 350px'>
  <div class='card-body'>
    <p class='card-text'>".$row[4]."</p>
  </div>
  </div></a>
  </div>";
    if($i==2)
    {
          echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo"<br>
</div>
</div>
<br><br><br>";
   }
   else if($q==4)
   {
        echo"<br><h1 class='page-header text-center text-light' style='background-color: #5D001E;'>Search/Explore Books</h1><br><br>";
   echo"<select name='genre' class='form-control' id='genre' required onchange='loadDoc3(this.value)'>";
  

foreach(range(1980, (int)date("Y")) as $year) {
    echo "\t<option value='".$year."'>".$year."</option>\n\r";
}

    echo "</select>
    <div class='divs'>
    <div id='demo'></div>
    <div id='all'>
  <br><br>
<h1 class='display1'>1980 Books</h1>
<br>";
   $data = "SELECT title,author_id,genre_id,rating,summary,details,comments,cover,publishing_date,id from book WHERE publishing_date>='1980-1-1' AND publishing_date<'1990-1-1'";
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
    <a href='bookdetails.php?w=$row[8]'><div class='card' style='width: 25rem; height: 550px; '>
  <img class='card-img-top cardimg' src='$row[7]' alt='$row[7]' style='height: 350px'>
  <div class='card-body'>
    <p class='card-text'>".$row[4]."</p>
  </div>
  </div></a>
  </div>";
    if($i==2)
    {
          echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
  
echo"<br>
</div>
</div>
<br><br><br>";
   }
   
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
<?php
function getauthors()
{
  
  $con = mysqli_connect('localhost','root','');
  $row2 = mysqli_select_db($con,'bookstore');
  $data = "SELECT id,name from author";
  $result = mysqli_query($con, $data);
  while($row = $result->fetch_assoc()) 
    {
       echo "<option value=".$row['id'].">".$row['name']."</option>";
    }
  
} ?>



</script>
<script>
function loadDoc1(value) {
  var heading = "";
  if(value==1)
  {
      heading="Mystery";
  }
  else if(value==2)
  {
    heading="Romance";
  }
  else if(value==3)
  {
    heading="Fiction";
  }
  else if(value==4)
  {
    heading="Psychology";
  }
  else if(value==5)
  {
    heading="Self Help";
  }
  else if(value==6)
  {
    heading="Children";
  }
  else if(value==7)
  {
    heading="Cooking";
  }
  else if(value==8)
  {
    heading="Politics";
  }
  else if(value==9)
  {
    heading="History";
  }
  else if(value==10)
  {
    heading="Biography";
  }

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("all").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "loadbooks.php?q="+value+"&r="+heading, true);
  xhttp.send();
}
function loadDoc2(value) {
  var heading = "";
  if(value==1)
  {
      heading="John Green";
  }
  else if(value==2)
  {
    heading="James Lane";
  }
  else if(value==3)
  {
    heading="Lewise Carroll";
  }
  else if(value==4)
  {
    heading="Jane Smith";
  }
  else if(value==5)
  {
    heading="Francis Lelord";
  }

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("all").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "loadbooksauthors.php?q="+value+"&r="+heading, true);
  xhttp.send();
}
function loadDoc3(value) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("all").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "loadbooksyear.php?q="+value, true);
  xhttp.send();
}
</script>