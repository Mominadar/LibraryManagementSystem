<?php 
include 'connection.php';
?>
<?php 
include 'header.php';
?><br><br>
<div class="row" style="height: auto;">
<div class="col-md-3" style= "display: table-cell">
	
	<!-- <br><br><br><br><br>
	<br><br><br><br>
	<h1 class="display1" style= "color:#5D001E;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search Books</h1>
	<br>
	<div class="list-group" >
	<a href="books.php" class="list-group-item list-group-item-action" style="padding: 25px;">
    Search All
  </a>
  <a href="#" class="list-group-item list-group-item-action" onclick="loadDoc(3)" style="padding: 25px;"> Search by Author</a>
  <a href="#" class="list-group-item list-group-item-action" onclick="loadDoc(4)" style="padding: 25px;"> Search by Publisher</a>
</div> -->
</div>
<div id="divs" class="col-md-8" style= "background-color: white; height: auto;">
	<br>
	<h1 class="page-header text-center text-light" style= "background-color:#5D001E;">Search/Explore Books</h1>
<br><br>
<form action="search.php" method="POST">
	  <div class="row">
	  <div class="col-md-1">
      </div>
	  <div class="col-md-8">
      <input class="form-control " name="name" type="text" placeholder="Search Books by title (Type complete title)">
      </div>
      <div class="col-md-3">
      <button class="btn btn-outline-success my-2 my-sm-0" style= "background-color:#5D001E; color:white;" type="submit">Search</button>
      </div>
      <div class="col-md-1">
      </div>
      </div>
</form>
<div >
<div id="demo"></div>
<div id="all">
	<br><br>
<h1 class="display1">All Books</h1>
<br>
  <?php
  $host="remotemysql.com";
  $port=3306;
  $socket="";
  $user="sLNIZ77zSi";
  $password="mvTko0S5qp";
  $dbname="sLNIZ77zSi";
  $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
  $sql = "SELECT isbn,title,book_year,published_language FROM book";
  $stmt= $con->prepare($sql);
  $stmt->execute();
  // $result = $stmt->fetchAll();
  // $num = mysqli_num_rows($result);
  $i = 0;
  while($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        if($i==0)
        {
        	echo "<div class='row'>";
        }
       
   	echo "<div class='col-md-3' style='margin-left: 10px; margin-right: 35px;' >
    <a href='bookdetails.php?w=$row[0]'><div class='card' style='width: 25rem; height: 350px; '>
  <img class='card-img-top cardimg' src='images/book_cover.png' alt='$row[1]' style='height: 200px;'>
  <div class='card-body'>
  <p class='card-text'> Book Title: ".$row[1]."</p>
  <p class='card-text'> Book Year: Language: ".$row[2]."</p>
  <p class='card-text'> Book Language: ".$row[3]."</p>
    
  </div>
  </div></a>
  </div>";
    if($i==2)
    {
        	echo "</div><br>";

    }    
       $i = ($i+1)%3;
    }
 
  ?> 
<br>
</div>
</div>
<br><br><br>
</div>
<div class="col-md-1" >
</div>
</div>

<script>
function loadDoc(option) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("divs").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "load.php?q="+option, true);
  xhttp.send();
}
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
<?php 
include 'firstfooter.php';
?>