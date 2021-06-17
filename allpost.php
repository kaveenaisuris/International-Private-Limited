<?php   include "db.php";    ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<title>adpost</title>


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
      <li><a href="index.php">Home</a></li>
      <li class="active"><a href="allpost.php">All ads</a></li>
     
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

    <!-- Page Content -->
    <div class="container p-3 mb-2 bg-light text-dark">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12">

          <h1 class="my-4">All Ads
            <small></small>
          </h1>
          
           <?php
        $query ="select * from products";
        $select_all_query=mysqli_query($connection,$query);
        
        while($row=mysqli_fetch_assoc($select_all_query)){
            $pname = $row["pname"];
            $location = $row["location"];
            $price = $row["price"];
             $img = $row["img"];
            $id = $row["p_id"];
         
        ?>
          <!-- Blog Post -->
          <div class="card">
            <img class="card-img-top" src="<?php echo $img;  ?>" alt="Card image cap" width="500px" height="200px">
            <div class="card-body">
              <h2 class="card-title"><?php echo $pname;  ?></h2>
              <h4 class="text-danger">Rs.<?php echo $price;  ?></h4>
              <a href="onepost.php?id=<?php echo $id;  ?>" class="btn btn-primary">View Item &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              
            </div>
          </div>
          <div class="conatiner" style="padding:20px;"></div>
<?php
            
            
        }
            ?>
       

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

       
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>