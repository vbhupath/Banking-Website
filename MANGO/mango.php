<?php
$servername = "localhost:3306";
$username = "vbhupath_muser";
$password = "mangobank";
$database="vbhupath_mango";

$conn = mysqli_connect($servername, $username, $password,$database);
//echo "succesful";
$username= $_POST['username'];
$password=$_POST['password'];
//echo "po";
$sql = "select * from signuptable WHERE username ='$username' and password= '$password'";
$result = $conn->query($sql);
$redirect_page = 'Location: ./test.html';
$redirect = true;


    if ($result->num_rows > 0) {
        session_start();

 $_SESSION["username"] = "$username";

 

        $redirect_page = 'Location: ./accounts.php';
        header($redirect_page);

         quit;
    } else {
        
    
    echo "invalid username/password";
}
$con->close();
?>