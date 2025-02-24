<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Xu ly dang ky</title>
</head>
<body>
<?php

$username = $_POST['username'];
$password = $_POST['password'];
include("connect.php");
$sql = "INSERT INTO user (username, password ) VALUES ('$username','$password')";
mysqli_query($conn,$sql);   
header('location: login_2.html');

?>

</body>
</html>