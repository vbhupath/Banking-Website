<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mango Bank</title>
  <link href="https://fonts.googleapis.com/css?family=Anton|Raleway:400,600,800" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="acc.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Acme|Oswald:400,600" rel="stylesheet">
</head>
<body>
<!-- nav bar  -->
<nav class="navbar navbar-inverse">
  
       <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./index.html">MANGO <span class="glyphicon glyphicon-grain" aria-hidden="true"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-nav-demo">
       <ul class="nav navbar-nav">
       
         <li><a href="./accounts.html">Home</a></li>
         <li><a href="./about.html">About</a></li>
         <li><a href="./contact.html">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./index.html"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout </a></li>
         </ul>
     </div>
</nav>
<!-- nav bar  -->


<!-- body -->
<div class="container">

<h1 id="heading"><strong>Mango Banking Solutions</strong></h1>


<ul class="nav nav-pills nav-stacked">
    
           <li> Welcome <?php echo $_SESSION["username"]; ?> </li>

  <li><a href="./personal.php">PERSONAL BANKING</a></li>
<hr class="line">
  <li><a href="./buisness.html">BUSINESS BANKING</a></li>
  <hr class="line">
  <li><a href="./loan1.html">LOANS</a></li>
  <hr class="line">
  <li><a href="./loan.html">CARDS</a></li>
  <hr class="line">
  </ul>

  


</div>
</div>







<script src="https://code.jquery.com/jquery-2.1.4.min.js" integrity="sha256-8WqyJLuWKRBVhxXIL1jBDD7SDxU936oZkCnxQbWwJVw=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
