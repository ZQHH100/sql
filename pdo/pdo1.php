<?php
$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=1906', $user, $pass);
//var_dump($dbh);
//准备sql语句
$id = $_GET['id'];
echo "未处理的参数:".$id;echo '<br>';
$id = intval($_GET['id']);
echo "处理过的参数:".$id;echo '<br>';
$sql = "select * from p_users where id={$id}";

//发送查询
$res = $dbh->query($sql);
while($row = $res->fetch(PDO::FETCH_ASSOC))
{
    echo '<pre>';print_r($row);echo '</pre>';
    echo "<hr>";
}
