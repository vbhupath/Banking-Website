<?php
session_start();
$servername = "localhost:3306";
$username = "vbhupath_muser";
$password = "mangobank";
$database="vbhupath_mango";

$conn = mysqli_connect($servername, $username, $password,$database);
//echo "success";
$balance = $_POST['balance'];
$username= $_SESSION["username"];


$id = mysql_query("select * from signuptable where username ='$username'");

while($rid = mysql_fetch_assoc($id)){
    echo $rid.['userid'];
}


$uid = $rid['userid'];

$sql = "Insert into balance(balance,accno,username) values ('$balance','$uid', '$username')";
if ($conn->query($sql) === TRUE) {
    echo  $id['userid']. "deposited successful";
    

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>

o