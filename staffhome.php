<?php 
include 'connection.php';
?>
<?php 
include 'staffheader.php';
?>
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



.frontside {
  position: relative;
  -webkit-transform: rotateY(0deg);
  -ms-transform: rotateY(0deg);
  z-index: 2;
  margin-bottom: 30px;
}


.frontside {
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

.frontside .card {
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


</style>
<div style="background-color:white;" id="ourteam">
    <div class="container" style="width: 700px;"><br><br>
        <center><h1 style="color: #5D001E; font-family: 'Raleway',sans-serif; font-size: 40px; font-weight: 700; line-height: 40px; margin: 0 0 10px; text-transform: uppercase;">Dashboard</h1></center><br>
         <br>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="images/card.png" alt="card image" style="width:200px;height:150px"></p>
                                  
                                    <a href="librarycard.php" class="btn btn-primary btn-block btn-sm" style="border-radius: 40px; background-color: #5D001E;  padding: 10px 20px;">Give Library Card</a><br>
         
                                    <p class="card-text">Assign Library Cards.</p>
                                    
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="images/fine.png" style="width:200px;height:150px" alt="card image"></p>
                                   
                                    <a href="checkdues.php" class="btn btn-primary btn-block btn-sm" style="border-radius: 40px; background-color: #5D001E; padding: 10px 20px;" >Check Dues</a>
                                    <br>
                                    <p class="card-text">View Dues of members.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="images/borrow.png" style="width:200px;height:150px" alt="card image"></p>
                                   
                                    <a href="borrowedbooks.php" class="btn btn-primary btn-block btn-sm" style="border-radius: 40px; background-color: #5D001E; padding: 10px 20px;">Borrowed Books</a>
                                    <br>
                                    <p class="card-text">View list of burrowed books.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="images/borrow.png" style="width:200px;height:150px" alt="card image"></p>
                                   
                                    <a href="issue.php" class="btn btn-primary btn-block btn-sm" style="border-radius: 40px; background-color: #5D001E; padding: 10px 20px;">Issue book</a>
                                    <br>
                                    <p class="card-text">Issue Book to Member.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

           
            </div>
           
 </div></div></div></div></p></p></div></div></div></div>
<br><br>



<?php 
include 'firstfooter.php';
?>