<?php
/**
 * Created by PhpStorm.
 * User: Sunny_Zhang
 * Date: 7/6/18
 * Time: PM2:29
 */

include '../public/common/config.php';

$connect = connectDB();

$id = $_GET['id'];
echo $id;
echo  "<br>";

$sql = "delete from user where id = {$id}";

echo $sql;
echo  "<br>";

$result = mysqli_query($connect,$sql);



if($result){
    echo '删除成功';
    echo  '<script>location="index.php"</script>';

}else{
    echo '删除失败';
}