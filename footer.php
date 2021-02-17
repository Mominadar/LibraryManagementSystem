<!DOCTYPE html>
<html>
<head>
    <title>Homelogin</title>
</head>
<body>
    <style>
        .bg-info
{
      background: rgb(34,193,195);
    background: linear-gradient(0deg, rgba(34,193,195,0) 0%, rgba(30,212,130,0.5326505602240896) 100%);
  
     width: 100%; 
     margin-top: 30px;
     height:40%;
}
.g{
    height:50%;
}
    </style>

</body>
</html>
<?php echo"<br>	

<footer class='bg-info' style='background-color: grey; width: 100%; margin-top: 30px;'>
  <br><br>
    <div class='container'>
        <div class='row g'>
            <div class='col-md-3 col-lg-4 col-xl-3'>
                <h5>About</h5>
                <hr class='bg-white mb-2 mt-0 d-inline-block mx-auto w-25'>
                <p class='mb-0'>
                    We are students of 6th semester Computer Science. This is a semester project of Web Technologies.
                </p>
            </div>

            <div class='col-md-2 col-lg-2 col-xl-2 mx-auto'>
                <h5>Informations</h5>
                <hr class='bg-white mb-2 mt-0 d-inline-block mx-auto w-25'>
                <ul class='list-unstyled'>
                    <li><a href='books.php'>Explore Books</a></li>
                    <li><a href='authors.php'>Explore Authors</a></li>
                    <li><a href='posts.php'>go to newsfeed</a></li>
                    <li><a href='chatbox.php'>Chat with friends</a></li>
                </ul>
            </div>

            <div class='col-md-3 col-lg-2 col-xl-2 mx-auto'>
                <h5>Others links</h5>
                <hr class='bg-white mb-2 mt-0 d-inline-block mx-auto w-25'>
                <ul class='list-unstyled'>
                    <li><a href='books.php'>View Books by Genre</a></li>
                    <li><a href='books.php'>View Bought Books</a></li>
                    <li><a href='books.php'>View Popular Books</a></li>
                    <li><a href='books.php'>View Popular Authors</a></li>
                </ul>
            </div>
            

            <div class='col-md-4 col-lg-3 col-xl-3'>
                <h5>Contact</h5>
                <hr class='bg-white mb-2 mt-0 d-inline-block mx-auto w-25'>
                <ul class='list-unstyled'>
                    <li><i class='fa fa-home mr-2'></i>BOOK STORE</li>
                    <li><i class='fa fa-envelope mr-2'></i> bookstore@gmail.com</li>
                    <li><i class='fa fa-phone mr-2'></i> +0900 78601</li>
                    <li><i class='fa fa-print mr-2'></i> + 0334 566666</li>
                </ul>
            </div>
            <div class='col-12 copyright mt-3'>
                <p class='float-left'>
                    <a href='#''>Back to top</a>
                </p>
                
            </div>
        </div>
    </div>
</footer>";
?>