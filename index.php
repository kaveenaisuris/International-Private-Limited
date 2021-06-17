<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Waste Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.mySlides {display:none;}
</style>

<link rel="stylesheet" type="text/css" href="index.html">
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      <a class="navbar-brand" href="#">Waste Management</a>
    </div>

    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Home</a></li>
      <li><a href="allpost.php">All ads</a></li>
    </ul>

    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <?php
               if(isset($_SESSION['username'])){
                   echo "<li><a href='#'>{$_SESSION['username']}</a></li>";
                   echo "<li><a href='adpost.php'>Post a Ad</a></li>";
                   echo "<li><a href='logout.php'>Log Out</a></li>";
               }else{
                  echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                   echo "<li><a href='reg.php'><span class='glyphicon glyphicon-log-in'></span> Register</a></li>";
               }
               
               ?>
    </ul>
  </div>
</nav>

<h2><b>Welcome to Waste Management in Sri Lanka!</b></h2>

<div>
  <img class="mySlides" src="img1.jpg" width="1354" height="570" >
  <img class="mySlides" src="img2.jpg" width="1354" height="570" >
  <img class="mySlides" src="img3.jpg" width="1354" height="570" >
  <img class="mySlides" src="img4.jpg" width="1354" height="570" >
  <img class="mySlides" src="img5.jpg" width="1354" height="570" >
  <img class="mySlides" src="img6.jpg" width="1354" height="570" >
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script>

<H1><b>Are you in the clear on recycling contamination?</b></H1>
<H3>25% of all items in recycling bins are actually trash. That's a big problem impacting recycling efforts around the world. You can help by following three simple rules:</H3>
1.Recycle empty plastic bottles, cans, paper and cardboard.<br>
2.Keep foods and liquids out of your recycling.<br>
3.Keep plastic bags out of your recycling.

</body>
</html>
