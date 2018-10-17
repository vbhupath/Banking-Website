<?php
$servername = "localhost:3306";
$username = "vbhupath_muser";
$password = "mangobank";
$database="vbhupath_mango";

$conn = mysqli_connect($servername, $username, $password,$database);
//echo "succesful";
$username= $_POST['username'];



$sql = "select * from userloan WHERE username = '$username' ";
$result = $conn->query($sql);
$redirect_page = 'Location: ./loanvbhupath.html';
$redirect = true;

    if ($result->num_rows > 0)
    
    {
       
       $redirect_page = 'Location: ./loanvbhupath.html';
        header($redirect_page);
        quit;
        
    } else {
        
        header( 'Location: ./Loan.html');
    }
  
$con->close();
?> 