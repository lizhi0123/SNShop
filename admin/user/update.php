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
$oldId = $_POST["oldId"];

$sql = "UPDATE user SET id= $id,name= '{$name}' WHERE id ={$oldId}";


echo $sql;
echo  "<br>";

$result = mysqli_query($connect,$sql);



if($result){
    echo '修改成功';
    echo  '<script>location="index.php"</script>';

}else{
    echo '修改失败';
}