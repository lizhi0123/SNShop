<?php
/**
 * Created by PhpStorm.
 * User: Sunny_Zhang
 * Date: 7/6/18
 * Time: PM3:23
 */
//mysql_connect('localhost','root','123');
//mysql_query('set names utf8');
//mysql_select_db('myShop');


//$servername = "localhost";
//$username = "";
//$password = "";


////1.建立连接
//$connect=mysqli_connect('localhost','root','','testDB','3306');
//if ($connect){
//    echo '链接成功';
//}else{
//    echo '链接失败';
//}

function connectDB(){
    //1.建立连接
    $connect=mysqli_connect('localhost','root','','myShop','3306');
//if ($connect){
//    echo '链接成功';
//}else{
//    echo '链接失败';
//}
    return $connect;
}