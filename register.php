<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="library";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn) {

 die('Could not connect:' .mysqli_connect_error());

}
echo 'Connected successfully<br/>';
$stmt = $conn->prepare("INSERT INTO user (book1, password) VALUES(?,?)");
$stmt->bind_param("ss", $u, $p);
$u=$_POST["user"];
$p=$_POST["pass"];
$stmt->execute();
 echo "Record inserted successfully";
$stmt->close();
$conn->close();
header("refresh:3; url=home.html");
?>