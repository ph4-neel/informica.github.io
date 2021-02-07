<?php
$username = filter_input(INPUT_POST, 'name');
$password = filter_input(INPUT_POST, 'email');
if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "informica";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO register (username, email)
values ('$username','$password')";
if ($conn->query($sql)){
 header('location:Success.html');
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "email should  not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>