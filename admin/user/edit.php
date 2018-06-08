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
//$sql = "SELECT * FROM user WHERE id = {$id}";
$sql = "SELECT * FROM `user` WHERE id = {$id}";



//1.建立连接
$connect = connectDB();

//2.定义sql语句

//$sql="select * from user";
mysqli_query($connect,'set names utf8');
//3.发送SQL语句
$rst=mysqli_query($connect,$sql);

// 返回记录数
$rowcount=mysqli_num_rows($rst);
//echo  "共".$rowcount."行<br>";
$rowArray =mysqli_fetch_array($rst);

//print_r($rowArray);
//echo "<br>";
//
$count = count($rowArray);
//print_r("count = ".$count."<br>");

//for($i=0;$i<count($rowArray);$i++) {
//    print_r($i."行");
//    echo " -----  ";
//
//    echo "rowArray i=".$rowArray["$i"];
//    echo "<br>";
//
//}
?>




<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改用户</title>
</head>


<body>

<form action="update.php" method="post">
    <p>ID:</p>
    <p><input type="text" name="ID" value="<?php echo $rowArray["id"] ?>"></p>

    <p>name:</p>
    <p><input type="text" name="name" value="<?php echo $rowArray["name"] ?>"></p>

    <input type="hidden" name="oldId" value="<?php echo $rowArray["id"] ?>">

    <p><input type="submit" value="修改"></p>
</form>


</body>
</html>

