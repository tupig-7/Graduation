<?php
/**
 * Created by PhpStorm.
 * User: X555Y
 * Date: 2018/9/20
 * Time: 9:53
 */

class Conn
{
    function getCon(){
        $servername = "localhost";
        $username = "root";
        $password = "qinwentianxi520.";

// 创建连接
        $conn = mysqli_connect($servername, $username, $password, "bysj");
        return $conn;
    }
}