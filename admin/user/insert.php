<?php
/**
 * Created by PhpStorm.
 * User: Sunny_Zhang
 * Date: 7/6/18
 * Time: PM2:29
 */

include '../public/common/config.php';

$connect = connectDB();

$id = $_POST['ID'];
$name = $_POST['name'];

$sql = "INSERT INTO user (id, name) VALUES ('{$id}', '{$name}')";


echo $sql;
echo  "<br>";

$result = mysqli_query($connect,$sql);



if($result){
    echo '插入成功';
    echo  '<script>location="index.php"</script>';

}else{
    echo '插入失败';
}