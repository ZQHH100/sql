<?php
$mysqli = new mysqli("localhost", "root", "root", "1906");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "连接成功";echo '<br>';

echo "未处理的参数:".$_GET['uid'];echo '<br>';
$uid = intval($_GET['uid']);
echo "接收的参数:".$uid;echo '<br>';
//准备sql语句
$sql="select * from p_users where id=".$uid;

//执行sql查询
$res = $mysqli->query($sql);

echo '<hr>';
//遍历数据
while($row = $res->fetch_assoc())
{
    echo '<pre>';print_r($row);echo '</pre>';
}