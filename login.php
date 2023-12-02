<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="library";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn) {

 die('Could not connect: '.mysqli_connect_error());

} 
echo 'Connected successfully<br/>';
$u=$_POST["user"];
$p=$_POST["pass"];
$sql = "SELECT book1, password FROM user where book1= '{$u}' "; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if ($row["book1"]== $u && $row["password"]==$p)
       {
           echo "You have been successfully Validated";
   }
else
{ 
  echo "Credentials Wrong, Try again";
}
}
}
else
 {
   echo "User name given was not exist";
}
$conn->close();
  header("refresh:2; url=home.html");
?>