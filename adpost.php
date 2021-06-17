<?php session_start(); ?>
<html>
<head>
<title>adpost</title>
<link rel="stylesheet" type="text/css" href="reg.css">

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">International Private Limited</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
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


<div class="simple-form">
<form id="registration" action="adpost_backend.php" method="post" enctype="multipart/form-data">
 <input type="text" name="pname" id="button" placeholder="Enter U R product Name"><br><br>
 <input type="text" name="category" id="button" placeholder="Enter U R Category"><br><br>
 <input type="text" name="location" id="button" placeholder="Enter U R Location"><br><br>
 <input type="text" name="price" id="button" placeholder="Enter U R Price"><br><br>
 <textarea name="description" rows="10" cols="30" >
Description
</textarea>
<br>
<input type="number" name="num" placeholder="Enter U R Mobile No" id="phone"><br><br>


<font color="white">Select image to upload:</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="file" name="fileToUpload" id="fileToUpload"><br>



<input type="submit" name="submit" value="Submit" id="butt"> &nbsp;
</form>

</div>
</body>
</html>