<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
} 

$x=$_POST['id'];
$y=$_POST['name'];
$z=$_POST['password'];


$sql = "INSERT INTO login (id ,name ,password)  VALUES ('$x','$y','$z')";

if ($conn->query($sql)==TRUE) {
header("Location:registration_form.php"); 
exit; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
