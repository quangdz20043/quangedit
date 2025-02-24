<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Thông tin user</title>
</head>
<body>
<table border="1">
	<tr>
    	<th>ID</th>
        
        <th>Username</th>
        <th>Password</th>
        
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
<?php
include('connect.php');
$sql = "select * from user";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
	?>
		<tr>
        	<td><?php echo $row['id']; ?></td>
            
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            
            <td><a href="http://localhost:8080/cntt05k22/bai6/update_user.php?id=<?php echo $row['id'];?>">Sửa</a></td>
            <td><a>Xóa</a></td>
        </tr>
<?php	} ?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>