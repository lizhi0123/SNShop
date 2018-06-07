<?php
/**
 * Created by PhpStorm.
 * User: Sunny_Zhang
 * Date: 7/6/18
 * Time: PM2:29
 */

include "../public/common/config.php";

$connect = connectDB();

$id = $_GET["id"];
$sql = "select * form user where id = {$id}";



//1.建立连接
$connect = connectDB();

//2.定义sql语句

//$sql="select * from user";
mysqli_query($connect,'set names utf8');
//3.发送SQL语句
$rst=mysqli_query($connect,$sql);

$row = mysqli_fetch_assoc($rst);


?>




<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改用户</title>
</head>


<body>

<form action="insert.php" method="post">
    <p>ID:</p>
    <p><input type="text" name="ID" value="<?php echo $row["id"] ?>"></p>

    <p>name:</p>
    <p><input type="text" name="name" value="<?php echo $row["name"] ?>"></p>

    <p><input type="submit" value="添加"></p>
</form>


</body>
</html>

