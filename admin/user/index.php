<?php
/**
 * Created by PhpStorm.
 * User: Sunny_Zhang
 * Date: 7/6/18
 * Time: PM2:29
 */
include '../public/common/config.php';


//1.建立连接
$connect = connectDB();

//2.定义sql语句

$sql="select * from user";
mysqli_query($connect,'set names utf8');
//3.发送SQL语句
$rst=mysqli_query($connect,$sql);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
</head>

<body>

<table width="1000px" border="1px" cellspacing="0">
    <tr>
        <th>编号</th>
        <th>用户名</th>
        <th>修改</th>
        <th>删除</th>
    </tr>
    <?php

    while($row =mysqli_fetch_array($rst)){
        echo "<tr>";
        $userID =  $row['id'];
        echo "<td>{$userID}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td><a href='edit.php?id={$row['id']}'>修改</a></td>";
        echo "<td><a href='delete.php?id={$row['id']}'>删除</a></td>";
        echo "</tr>";
    }
    ?>

</table>


</body>


</html>
