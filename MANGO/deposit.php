<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mango Bank</title>
  <link href="https://fonts.googleapis.com/css?family=Anton|Raleway:400,600,800" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="deposit.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
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
      <a class="navbar-brand" href="#"></span>MANGO</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-nav-demo">
       <ul class="nav navbar-nav">
         <li><a href="#">Home</a></li>
         <li><a href="#">About</a></li>
         <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Signup <i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
          <li><a href="#"></i>Login <i class="fa fa-user-circle" aria-hidden="true"></i></a></li>
         </ul>
     </div>
</nav>
<!-- nav bar  -->


<!-- body -->
<div class="container">

  <h1><strong>Mango Banking Solutions</strong></h1>



 





<div class="fieldsetMenu" >
     <form name="mForm" action="balance.php" method="post">
  <fieldset>
  <legend align="center" >Join MANGO Group  </legend>

  <li><label  for="balance">How much amount you want to deposit into  <?php echo $_SESSION["username"]; ?> account:</label>     
  <input  type="number"  name=" balance"  id=" balance "></li>

  <button type=" Submit"  value="deposit">Deposit</button>
  
</fieldset>
</form>
  

</div>
</div>







<script src="https://code.jquery.com/jquery-2.1.4.min.js" integrity="sha256-8WqyJLuWKRBVhxXIL1jBDD7SDxU936oZkCnxQbWwJVw=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>