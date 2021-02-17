<!DOCTYPE html>
<html>
<head>
  <title>HomePage</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
  	
      .grid {
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(auto-fill, minmax(250px,1fr));
  grid-auto-rows: 20px;
}

/* Non-grid specific CSS */  
body {
 
	text-rendering: optimizeLegibility;
	-webkit-font-smoothing: antialiased;
}

.item {
  background-color: #ffffff;
}

.photothumb{
  width: 100%;
}

.title {
  padding: 20px;
 }

.title h3{
  font-size: 1.2em;
  color: #ffffff;
  text-transform: uppercase;
}

.project .title{
  background-color: #F04E82;
}

.blog .title{
  background-color: #5D001E;
}

.photo .title{
  background-color: #71244B;
}

.desc{
  padding: 10px 10px 5px 10px;
}

.desc img{
  width: 50%;
  margin: 0 10px 10px 0;
  float: left;
}

.desc p{
  margin-bottom: 10px;
}












.cta-100 {
  margin-top: 100px;
  padding-left: 8%;
  padding-top: 7%;
}
.col-md-4{
    padding-bottom:20px;
}

.white {
  color: #fff !important;
}
.mt{float: left;margin-top: -20px;padding-top: 20px;}
.bg-blue-ui {
  background-color: #5D001E !important;
  padding: 20px;
}
figure img{width:300px;}

#blogCarousel {
  padding-bottom: 100px;
}

.blog .carousel-indicators {
  left: 0;
  top: -50px;
  height: 50%;
}


/* The colour of the indicators */

.blog .carousel-indicators li {
  background: #708198;
  border-radius: 50%;
  width: 8px;
  height: 8px;
}

.blog .carousel-indicators .active {
  background: #0fc9af;
}




.item-carousel-blog-block {
  outline: medium none;
  padding: 15px;
}

.item-box-blog {
  border: 1px solid #dadada;
  text-align: center;
  z-index: 4;
  padding: 20px;
}

.item-box-blog-image {
  position: relative;
}

.item-box-blog-image figure img {
  width: 100%;
  height: auto;
}

.item-box-blog-date {
  position: absolute;
  z-index: 5;
  padding: 4px 20px;
  top: -20px;
  right: 8px;
  background-color: #41cb52;
}

.item-box-blog-date span {
  color: #fff;
  display: block;
  text-align: center;
  line-height: 1.2;
}

.item-box-blog-date span.mon {
  font-size: 18px;
}

.item-box-blog-date span.day {
  font-size: 16px;
}

.item-box-blog-body {
  padding: 10px;
}

.item-heading-blog a h5 {
  margin: 0;
  line-height: 1;
  text-decoration:none;
  transition: color 0.3s;
}

.item-box-blog-heading a {
    text-decoration: none;
}

.item-box-blog-data p {
  font-size: 13px;
}

.item-box-blog-data p i {
  font-size: 12px;
}

.item-box-blog-text {
  max-height: 100px;
  overflow: hidden;
}

.mt-10 {
  float: left;
  margin-top: -10px;
  padding-top: 10px;
}

.btn.bg-blue-ui.white.read {
  cursor: pointer;
  padding: 4px 20px;
  float: left;
  margin-top: 10px;
}

.btn.bg-blue-ui.white.read:hover {
  box-shadow: 0px 5px 15px inset #4d5f77;
}
/* Made with love by Mutiullah Samim*/
body {
		background: white;
		font-family: 'Varela Round', sans-serif;
	}
	.form-control {
		box-shadow: none;
		border-color: #5D001E;
		background-color: #5D001E;
	}
	.form-control:focus {
		border-color: #5D001E; 
		background-color: #5D001E;
	}
	.login-form {
        width: 350px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .login-form form {
        color: #434343;
		border-radius: 1px;
    	margin-bottom: 15px;
        background: #FFF;
		border: 1px solid #f3f3f3;
        box-shadow: 1px 1px 1.5px 1px #5D001E;
        padding: 30px;
	}
	.login-form h4 {
		text-align: center;
		font-size: 22px;
        margin-bottom: 20px;
	}
    .login-form .avatar {
        color: #fff;
		margin: 0 auto 30px;
        text-align: center;
		width: 100px;
		height: 100px;
		border-radius: 50%;
		z-index: 9;
		background: #4aba70;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
    .login-form .avatar i {
        font-size: 62px;
    }
    .login-form .form-group {
        margin-bottom: 20px;
    }
	.login-form .form-control, .login-form .btn {
		min-height: 40px;
		border-radius: 2px; 
        transition: all 0.5s;
	}
	.login-form .close {
        position: absolute;
		top: 15px;
		right: 15px;
	}
	.login-form .btn {
		background: #4aba70;
		border: none;
		line-height: normal;
	}
	.login-form .btn:hover, .login-form .btn:focus {
		background: #42ae68;
	}
    .login-form .checkbox-inline {
        float: left;
    }
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .forgot-link {
        float: right;
    }
    .login-form .small {
        font-size: 13px;
    }
    .login-form a {
        color: #4aba70;
    }

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}
form-control{
	width: 50%;
}
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}

  </style>
</head>
<body>

  <?php 
include 'firstheader.php';
?>
<div class="container">
	<div class="col-lg-6">
	<h1> <img class="img-responsive" src="images/hh.png"></h1>
    </div>
   <div class="col-lg-6">
   </div>
</div>

<div class="container" style="background-color: white;">
<div class="col-lg-6">
<h2>Library Management System</h2>
<p class="lead">Read and burrow books of any genre, year here.<br> Join our users to gain access to millions of books at a moments ease.<br><br>
Login to your account now or If you're new, Register <a href="index.php#signup" style="color: #5D001E;">here</a></p>
<a href="index.php#aboutus" type="button" class="btn btn-primary" style="border-radius: 40px; background-color: #5D001E; padding: 10px 40px;">Learn more</a><br><br>
</p>
<br>

</div>
<div class="col-lg-6" id="login">
	<div class="login-form">    
    <form action="student_login.php" method="post">
    	<center><h1 style="color: #5D001E; font-family: 'Raleway',sans-serif; font-size: 40px; font-weight: 700; line-height: 40px; margin: 0 0 24px; text-align: center; text-transform: uppercase;">STUDENT LOGIN</h1></center><br>
        <div class="form-group">
            <input type="text" class="form-control" name="loginid" placeholder="Enter Login Id" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Enter password" required="required">
        </div><br><br>
        <br>
        <input type="submit" class="btn btn-primary btn-block btn-lg" name="submit" style="border-radius: 40px; background-color: #5D001E; padding: 10px 40px;" value="Login">
         <br><div class="text-center small">Don't have an account? <a href="index.php#signup" style="color: #5D001E;">Sign up</a></div>              
    </form>			
</div>
 </div>
</div>
<div style="background-color: #5D001E;"><br><br>
	<div class="container" id="signup">
		<div class="login-form col-md-9">
    <form action="signup.php" method="post" enctype="multipart/form-data">
    	<center><h1 style="color: #5D001E; font-family: 'Raleway',sans-serif; font-size: 40px; font-weight: 700; line-height: 40px; margin: 0 0 24px; text-align: center; text-transform: uppercase;">STUDENT REGISTER ACCOUNT</h1></center><br>
        <div class="container">
        	<div class="form-group col-md-6">
        		<div class="form-row">
    <!-- <div class="form-group col-md-6">
      <label for="inputEmail4">Student ID   *</label>
      <input type="textl" class="form-control" name="email" id="inputEmail4" placeholder="Enter Registration no.">
    </div> -->
    
  </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">First Name  *</label>
      <input type="text" class="form-control" name="firstname" id="inputPassword4" placeholder="Enter First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last Name  *</label>
      <input type="text" class="form-control" name="lastname" id="cinputPassword4" placeholder="Enter Last Name">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="inputPassword4">Gender  *</label><br>

<!-- Material inline 1 -->
<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" id="materialInline1" name="gender" value="male">
  <label class="form-check-label" for="materialInline1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" id="materialInline2" name="gender" value="female">
  <label class="form-check-label" for="materialInline2">Female</label>
</div>
 </div>
 <div class="form-group col-md-6">
      <label for="inputEmail4"> Department  *</label>
      <select class="form-control" name="department" id="inputEmail5">
      <option value="">Select Option</option>
      <option value="Computer Science">Computer Science</option>
      <option value="Physics">Physics</option>
      <option value="Electrical">Electrical</option>
      <option value="Business Administration">Business Administration</option>
      <option value="Maths">Maths</option>
      <option value="Humanities">Humanities</option>
      </select>
    </div>
    </div>
    <div class="form-row">
  <div class="form-group col-md-6">
  <label for="inputPassword4">Address *</label>
  <textarea type="tel" name="address" class="form-control" id="cardNumber" placeholder="Enter your Address" ></textarea>
    </div>
<div class="form-group col-md-6">
    </div>
    </div>
    <div class="form-row">
  <div class="form-group col-md-6">
  	<input type="submit" name="submit" class="btn btn-primary btn-block btn-lg" style="border-radius: 40px; background-color: #5D001E; margin-left: 30px; padding: 10px 30px; width: 60%;" value="Signup">
 </div>
<div class="form-group col-md-6">
    </div>
    </div>
        	</div>
</div>

        </div>
        <div class="col-md-2"><br><br><br>
			  <img src="./images/art1.png" style="width: 300px; height: 400px; margin: 30px; ">
		</div>
    	   
		</div>	</form><br><br></div></div></div> <br>
 </div>

 <div class="container" style="background-color: white;" id="aboutus">
                <br><br><br>

           <center><h1 style="color: #5D001E; font-family: 'Raleway',sans-serif; font-size: 40px; font-weight: 700; line-height: 40px; margin: 0 0 24px; text-transform: uppercase;">ABOUT US</h1></center>
                <br><br>
            <div class="container">
            	<div class="row">
            		<div class="col-lg-9" style="text-align: justify-all;">
            			<h2 style="color: #5D001E; font-family: 'Raleway',sans-serif; font-size: 40px; font-weight: 700; line-height: 40px; margin: 0 0 24px; text-transform: uppercase;">History</h2>
            <p style="text-align:justify-all; text-indent: 50px;  direction: rtl;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.	<p>
            <br><br><h2 style="color: #5D001E; font-family: 'Raleway',sans-serif; font-size: 40px; font-weight: 700; line-height: 40px; margin: 0 0 24px; text-transform: uppercase;">Our Vision</h2>
            <p style="text-align:justify-all; text-indent: 50px;  direction: rtl;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p><br><br>
            <h2 style="color: #5D001E; font-family: 'Raleway',sans-serif; font-size: 40px; font-weight: 700; line-height: 40px; margin: 0 0 24px; text-transform: uppercase;">Future</h2>
            <p style="text-align:justify-all; text-indent: 50px;  direction: rtl;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.	
            </p>
            		</div>
            		<div class="col-lg-3">
            			<br><br><br><br>
			<img src="./images/art4.png" style="width: 300px; height: 400px; margin: 30px; margin-top: 100px;">
			<img src="./images/art5.png" style="width: 300px; height: 400px; margin: 30px; margin-top: 150px;">
            		</div>
            	</div>
            </div>
            

   <br><br><br>
   </div>

<br><br><br><br>
<div class="container"><br><br>
	<center><img src="./images/art6.png"><br><br><br>
	<h3 style="color: #5D001E; font-family: 'Raleway',sans-serif; font-size: 40px; font-weight: 700; line-height: 40px; margin: 0 0 24px; text-align: center; ">Happy Reading!</h3></center>
 </div>



<script>




  $(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
      var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      input.trigger('fileselect', [label]);
      });

      $('.btn-file :file').on('fileselect', function(event, label) {
          
          var input = $(this).parents('.input-group').find(':text'),
              log = label;
          
          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }
        
      });
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              
              reader.onload = function (e) {
                  $('#img-upload').attr('src', e.target.result);
              }
              
              reader.readAsDataURL(input.files[0]);
          }
      }

      $("#imgInp").change(function(){
          readURL(this);
      }); 	
    });



      function resizeGridItem(item){
    grid = document.getElementsByClassName("grid")[0];
    rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
    rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
    rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height+rowGap)/(rowHeight+rowGap));
      item.style.gridRowEnd = "span "+rowSpan;
  }

  function resizeAllGridItems(){
    allItems = document.getElementsByClassName("item");
    for(x=0;x<allItems.length;x++){
      resizeGridItem(allItems[x]);
    }
  }

  function resizeInstance(instance){
    item = instance.elements[0];
    resizeGridItem(item);
  }

  window.onload = resizeAllGridItems();
  window.addEventListener("resize", resizeAllGridItems);

  allItems = document.getElementsByClassName("item");
  for(x=0;x<allItems.length;x++){
    imagesLoaded( allItems[x], resizeInstance);
  }
  </script>
<?php 
include 'firstfooter.php';
?>

</body>
</html>