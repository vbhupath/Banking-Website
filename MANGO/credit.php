<?php
$servername = "localhost:3306";
$username = "vbhupath_muser";
$password = "mangobank";
$database="vbhupath_mango";

$conn = mysqli_connect($servername, $username, $password,$database);
//echo "succesful";
$username= $_POST['username'];
$credit=$_POST['credit'];
//echo "po";
$sql = "select * from userloan WHERE username ='$username' and credit = '$credit'";
$result = $conn->query($sql);
$redirect_page = 'Location: ./test.html';
$redirect = true;


    if ($result->num_rows = 0) {
        $redirect_page = 'Location: ./creditvbhupath.html';
        header($redirect_page);
         quit;
    } else {
      $redirect_page = 'Location: ./cards.html';
        header($redirect_page);  
    
    echo "invalid username/password";
}
$con->close();
?> 