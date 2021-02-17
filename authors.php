<!DOCTYPE html>
<html>
<head>
  <title>Search</title>
</head>
<body>
<style>
   .page-header
  {
    background: rgb(34,193,195);
background: linear-gradient(0deg, rgba(34,193,195,0) 0%, rgba(30,212,130,0.5326505602240896) 100%);
}
.row,.col-md-8,.col-md-1,.col-md-2
{


background: rgb(124,226,197);
background: linear-gradient(0deg, rgba(124,226,197,0.36738445378151263) 97%, rgba(30,212,130,0.5326505602240896) 100%);
}
</style>
</body>
</html>
<?php 
include 'connection.php';
?>
<?php 
include 'header.php';
?><br>
<div class="row" style="height: auto;">
<div class="col-md-1" style= "display: table-cell">
</div>
<div id="divs" class="col-md-8" style= " height: auto;">
	<br>
	<h1 class="page-header text-center text-light" style="background-color: #5D001E;">Search/Explore Authors</h1>
<br><br>
<form>
	  <div class="row">
	  <div class="col-md-1">
      </div>
	  <div class="col-md-8">
      <input class="form-control " type="search" placeholder="Search Authors" aria-label="Search">
      </div>
      <div class="col-md-3">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </div>
      <div class="col-md-1">
      </div>
      </div>
</form>
<br><br>
<div id="romance" >
</div>
<br><br><br>
</div>
<div class="col-md-2" >
</div>
</div>
<br><?php 
include 'footer.php';
?>
<script>
function loadDoc(option) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("romance").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "loadauthors.php?q="+option, true);
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
  xhttp.open("GET", "loadauthors.php?q="+value+"&r="+heading, true);
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
  else if(value==5)
  {
    heading="Harper lee";
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
</body>
</html>